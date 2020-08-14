#!/bin/sh
backup_folder=$1
dest_folder=$2
_date=$(date +%d-%m-%Y)
file_name="backup-$_date"
echo "backup is processing from $backup_folder to $dest_folder"
echo
zip -r $dest_folder/$file_name $backup_folder > /dev/null
# show notify after backuip
echo
echo "BACKUP succesfully!"
echo "filename backup: $file_name"
echo "File backup was save is: $dest_folder"
ls -al $dest_folder
cd ~
echo