#!/bin/sh
#if id | grep root > /dev/null
#then
#else
#        echo "You must be root to install these tools."
#        exit 1
#fi

echo "Enter your Mysql PATH: (default: /usr/bin/mysql)"
echo "Defautl press Enter"
read MYSQL_PATH
if [ "${MYSQL_PATH}" = "" ]; then
	MYSQL_PATH="/usr/bin/mysql"
fi

echo ""

echo "Enter the Mysql root password if the password exist:"
read MYSQL_PW
if [ ${MYSQL_PW}1 = "1" ]; then
	:
else
	MY_PRA="-p${MYSQL_PW}"
fi

echo "Enter your http PATH: (default: /var/www/html)"
echo "Defautl press Enter"
read HTTP_PATH
if [ "${HTTP_PATH}" = "" ]; then
	HTTP_PATH="/var/www/html"
fi

if [ -e "${HTTP_PATH}" ]; then
	:
else
	echo "${HTTP_PATH} not find, please input again!"
	exit 1
fi

echo ""
echo "Import database..."
${MYSQL_PATH} -u root $MY_PRA <./order/autocfg.sql

if [ $? = "0" ]; then
	echo "Import database success!"
else
	echo "Mysql Database error"
	exit 1
fi

sleep 0.5

echo ""
echo "Update database..."
echo ""

php ./order/update.php

if [ $? = "0" ]; then
	echo "Update database success!"
else
	echo "Update database failed, please update it on web!"
fi

sleep 0.5

cp -rp ../autocfg ${HTTP_PATH}/

echo ""
echo "Install done!"
echo ""
