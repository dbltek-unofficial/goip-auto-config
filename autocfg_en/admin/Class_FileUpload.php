<?php
class fileupload
{
    var $file_formfilename; //钃祶琛ㄥ崟璎礷ile閸庡喐纭�
    var $file_updir;        //钃祶鍕跺仹
    var $file_upsize;       //钃祶骞犵⒈鎯岄０娣偤 婵傚邯鍊�
    var $file_newfilename;  //琚�閸屻仱纰卞厯
    var $file_filetype;     //铦跨個锟借榻戯拷闂�绠�
    var $file_size=array(); //铦跨個娣偤 array("B","M")
    var $file_smfilename;   //鍥剧墖璇磋伆鍥緐閵岋拷

    function check_upload()
    //椋曟煡鎽熺粺钑犵粵鍓х「钃祶锟�
    {
        if( get_cfg_var("file_uploads") )
        {
            return true;
        }
        else
        {
            return false;
        }

    }


    function initialize($formfile_name, $up_dirpath, $up_filesize,$permittype)
    /*************************************************
    //鎰曞⿲鍖�
    閳冲⿳锛氳摦娴嶈〃鍗曡file閸庡喐纭㈡偦澹帾鍔瑰綍鎮伙拷
          钃祶骞犵⒈鎯岄０娣偤鎮掗潧骞揃鎮岋綄鎼╂鏂掓劥澧㈡祶鐨勫範纰憋拷鐘樺秲鈻堥煷褋楠噄f,doc,txt,鎮岋拷
     ************************************************/
    {
        if ( ! $this->check_upload() )
        {
            $this->error("Not support !;
            exit();
        }
    /*
    ini_set("upload_max_filesize",$up_filesize."M");

    $system_max_size = get_cfg_var("upload_max_filesize");
    */

        $this->file_formfilename = $formfile_name;
        $this->file_updir = $up_dirpath."/";
        $this->file_upsize = $up_filesize;
        $this->file_smfilename = '';

        if ( empty($_FILES[$this->file_formfilename]['name']) )
        {
            $this->error("Not support);
            exit();
        }

        if ( $_FILES[$this->file_formfilename]['size'] > $up_filesize )
        {
            $this->error("Not support$up_filesize B!");
            exit();
        }

        $filename=$_FILES[$this->file_formfilename]['name'];
        $temparray=explode('.',$filename);
        $count=count($temparray)-1;
        $this->file_filetype=$temparray[$count];


        if ( ! in_array($this->file_filetype,explode(",",$permittype)) )
        {
            $this->error("Not support);
            exit();
        }

        $this->file_newfilename = date('YmdHis').'.'.$this->file_filetype;
        $this->file_size=array("B"=>$_FILES[$this->file_formfilename]['size'],
        "M"=>(round($_FILES[$this->file_formfilename]['size']/(1024*1024))));

    }


    function upload()
    /*************************************************
    //钃祶骞犵⒈宕�   **************************************************/
    {
	//return @chmod($this->file_updir.$this->file_newfilename, 0777);
	//return $this->file_updir.$this->file_newfilename;
	
        if( @copy($_FILES[$this->file_formfilename]['tmp_name'], $this->file_updir.$this->file_newfilename) )
        {
            @unlink($_FILES[$this->file_formfilename]['tmp_name']);
            @chmod($this->file_updir.$this->file_newfilename, 0777);
            return true;
        }
        else
        {
            return false;
        }

    }

    function check_gd()
    /*************************************************
    //椋曟煡鎽熺粺钑犵猾鍔犳柆鍢嶉摣锟�
    **************************************************/
    {
        if(function_exists("imageline"))
        {
            return true;
        }
        else
        {
            return false;
        }
    }



    function smphoto($wIdth,$height,$dscChar='')
    /*************************************************
    //娴�熷祿鐗囪鑱板浘
    閳冲⿳锛氳鑱板浘閿冨害锝岀閹达綄瀚疯伆鍥捐澘鐐�鍐稿殺缂�(榛樿憻"sm_")
    *************************************************/
    {

        if ( ! $this->check_gd() )
        {
            $this->error("Not support");
            exit();
        }


        $srcFile = $this->file_newfilename;

        if ($dscChar == '')
        {
            $dscChar = 'sm_'; //榛樿憻璇磋伆鍥捐澘鐐�鍐稿殺缂�
        }

        $dscFile = $this->file_updir.$dscChar.$srcFile;

        $data = @getimagesize($this->file_updir.$srcFile,&$info);

        switch ($data[2])
        {
            case 1:
            $im = @imagecreatefromgif($this->file_updir.$srcFile);
            break;

            case 2:
            $im = @imagecreatefromjpeg($this->file_updir.$srcFile);
            break;

            case 3:
            $im = @imagecreatefrompng($this->file_updir.$srcFile);
            break;

        }

        $srcW=@imagesx($im);
        $srcH=@imagesy($im);
        $ni=@imagecreatetruecolor($wIdth,$height);
        @imagecopyresized($ni,$im,0,0,0,0,$wIdth,$height,$srcW,$srcH);
        $cr = @imagejpeg($ni,$dscFile);
        @chmod($dscFile, 0777);

        if ($cr)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    function upfileinfo()
    /*************************************************
    //钃祶鐨勫範纰辨倛鎭�
    *************************************************/
    {
        $fileinfo=array("newfilename"=>$this->file_newfilename,
        "filetype"=>$this->file_filetype,
        "size"=>$this->file_size,
        "smfilename"=>$this->file_smfilename);

        return $fileinfo;

    }

    function error($msg,$url="")
    /*************************************************
    //鑳滄劊閿欏箠琚囨伅
    *************************************************/
    {
        @$refererUrl = $_SERVER["HTTP_REFERER"] ? $_SERVER["HTTP_REFERER"] : "./index.php";
        if($url)
        {
            $refererUrl = $url;
        }
        $showMsg = "<script language=\"JavaScript\">\nfunction moveNew(){\nlocation.href=\"".$refererUrl."\";\n}\n";
        $showMsg .= "window.setTimeout('moveNew()','2000');\n</script>";
        $showMsg .= "<div><table wIdth='100%'><tr><td height='150px' align='center'><font color='#FF0000'><strong>".$msg."</strong></font><div style='height:15px'></div>Not support<div></div><a href='".$refererUrl."'>??/a></td></tr></table></div>";
        echo $showMsg;
    }

} //end class
?>
