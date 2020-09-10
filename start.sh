INIFILE="$(pwd)/cli-server.ini"
DOCROOT="$(pwd)/web"
ROUTER="$(pwd)/web/index.php"
HOST=0.0.0.0
PORT=8080

PHP=$(which php)
if [ $? != 0 ] ; then
echo "Unable to find PHP"
exit 1
fi

 $PHP -S $HOST:$PORT -c $INIFILE -t $DOCROOT
