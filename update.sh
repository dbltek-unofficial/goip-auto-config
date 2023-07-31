#!/bin/sh
echo ""
echo "export original database..."
echo ""

sleep 0.5

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

if [ -e ${HTTP_PATH} ]; then
	:
else
	echo "Not find ${HTTP_PATH},please input again!"
	exit 1
fi

VER="3"
while [ "${VER}" != "1" ] && [ "${VER}" != "2" ]; do
	echo "Enter your last versions:"
	echo "1.autocfg_en"
	echo "2.autocfg_utf8"
	read VER
	if [ "${VER}" == "1" ]; then
		DATABASE="autocfg_en"
		VER="1"
	elif [ "${VER}" == "2" ]; then
		DATABASE="autocfg"
		VER="2"
	else
		echo "You must select 1 or 2!"
		echo ""
	fi
done

echo ""

OUT_PATH="./order/last.sql"

if [ -e "${OUT_PATH}" ]; then
	rm ${OUT_PATH}
fi

${MYSQL_PATH}dump -u root $MY_PRA ${DATABASE} >${OUT_PATH}

if [ $? = "0" ]; then
	echo "export original database success!"
	${MYSQL_PATH} -u root $MY_PRA <./order/drop.sql
else
	echo "export database error!"
	exit 1
fi

${MYSQL_PATH} -u root $MY_PRA <./order/grant.sql

if [ $? = "0" ]; then
	echo ""

else
	echo "grant user failed!"
	exit 1
fi

sleep 0.8
echo ""
echo "Import original database..."
echo ""

${MYSQL_PATH} -u root $MY_PRA autocfg_en <${OUT_PATH}
sleep 0.5

if [ $? = "0" ]; then
	echo "Import original database success!"
else
	echo "import Database error"
	exit 1
fi

sleep 0.8
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

if [ -e "./autocfg_en" ]; then
	rm -rf ../autocfg_en
fi

if [ -e "./autocfg_utf8" ]; then
	rm -rf ../autocfg_utf8
fi

cp -rp ../autocfg ${HTTP_PATH}

echo ""
echo "update done!"
echo ""
