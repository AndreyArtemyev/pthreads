#!/bin/bash

if [ ! -d "vendor/" ]; then
    echo "Не найдена папка vendor/, скрипт необходимо запускать из корневой папки проекта!"
    exit
fi

( find vendor/ -type d -name ".git" && find vendor/ -name ".gitignore" && find vendor/ -name ".gitmodules" ) | xargs rm -rf