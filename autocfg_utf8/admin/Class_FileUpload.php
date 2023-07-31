<?php
class fileupload
{
    var $file_formfilename; //蓮浍表单謵file鍎冸硢
    var $file_updir;        //蓮浍勶偧
    var $file_upsize;       //蓮浍幠碱惌飰淬悺 濂庪倣
    var $file_newfilename;  //袀鍌つ碱兓
    var $file_filetype;     //蝿炀�袓齑�闀箄
    var $file_size=array(); //蝿炀淬悺 array("B","M")
    var $file_smfilename;   //图片说聰图u銌�

    function check_upload()
    //飕查摟统蕠绛剧硸蓮浍�
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
    //愕婌化 
    鈳婍：蓮浍表单謵file鍎冸硢悻壪措効录悻�
          蓮浍幠碱惌飰淬悺悒靛幓B悌ｌ搩毵斒愴墢浍的幠碱�犘嶃█韴с骇if,doc,txt,悌�
     ************************************************/
    {
        if ( ! $this->check_upload() )
        {
            $this->error("系统不支持_uploads 格式);
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
            $this->error(");
            exit();
        }

        if ( $_FILES[$this->file_formfilename]['size'] > $up_filesize )
        {
            $this->error("不支持格式$up_filesize !");
            exit();
        }

        $filename=$_FILES[$this->file_formfilename]['name'];
        $temparray=explode('.',$filename);
        $count=count($temparray)-1;
        $this->file_filetype=$temparray[$count];


        if ( ! in_array($this->file_filetype,explode(",",$permittype)) )
        {
            $this->error("不支持格式);
            exit();
        }

        $this->file_newfilename = date('YmdHis').'.'.$this->file_filetype;
        $this->file_size=array("B"=>$_FILES[$this->file_formfilename]['size'],
        "M"=>(round($_FILES[$this->file_formfilename]['size']/(1024*1024))));

    }


    function upload()
    /*************************************************
    //蓮浍幠碱崐    **************************************************/
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
    //飕查摟统蕠绫加斬嘍铫�
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
    //浯借嵓片说聰图
    鈳婍：说聰图锃度ｌ笩鎴ｌ嫷聰图蝿炀冸嚢缀(默葟"sm_")
    *************************************************/
    {

        if ( ! $this->check_gd() )
        {
            $this->error("系统不支持格式");
            exit();
        }


        $srcFile = $this->file_newfilename;

        if ($dscChar == '')
        {
            $dscChar = 'sm_'; //默葟说聰图蝿炀冸嚢缀
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
    //蓮浍的幠碱悈息
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
    //胜愣错幊袇息
    *************************************************/
    {
        @$refererUrl = $_SERVER["HTTP_REFERER"] ? $_SERVER["HTTP_REFERER"] : "./index.php";
        if($url)
        {
            $refererUrl = $url;
        }
        $showMsg = "<script language=\"JavaScript\">\nfunction moveNew(){\nlocation.href=\"".$refererUrl."\";\n}\n";
        $showMsg .= "window.setTimeout('moveNew()','2000');\n</script>";
        $showMsg .= "<div><table wIdth='100%'><tr><td height='150px' align='center'><font color='#FF0000'><strong>".$msg."</strong></font><div style='height:15px'></div>不支持格式<div></div><a href='".$refererUrl."'>不支持格式/a></td></tr></table></div>";
        echo $showMsg;
    }

} //end class
?>
