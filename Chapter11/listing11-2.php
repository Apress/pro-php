$fileName = '/path/to/file/filename.php';

$fileInfo = new SPLFileInfo($fileName);

$fileProps = array();
$fileProps['path'] 			= $fileInfo->getPath();
$fileProps['filename'] 		= $fileInfo->getFilename();
$fileProps['pathname'] 		= $fileInfo->getPathname();
$fileProps['perms'] 		= $fileInfo->getPerms();
$fileProps['inode'] 		= $fileInfo->getInode();
$fileProps['size'] 			= $fileInfo->getSize();
$fileProps['owner'] 		= $fileInfo->getOwner();
$fileProps['group'] 		= $fileInfo->getGroup();
$fileProps['atime'] 		= $fileInfo->getATime();
$fileProps['mtime'] 		= $fileInfo->getMTime();
$fileProps['ctime'] 		= $fileInfo->getCTime();
$fileProps['type'] 			= $fileInfo->getType();
$fileProps['isWritable'] 	= $fileInfo->isWritable();
$fileProps['isReadable'] 	= $fileInfo->isReadable();
$fileProps['isExecutable'] 	= $fileInfo->isExecutable();
$fileProps['isFile'] 		= $fileInfo->isFile();
$fileProps['isDir'] 		= $fileInfo->isDir();
$fileProps['isLink'] 		= $fileInfo->isLink();

var_export($fileProps);