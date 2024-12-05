#!/bin/bash
# Bash Menu Script Example

PS3='Please enter your choice: '
options=("Laravel APP" "Vue3 + Vite APP" "MYSQL server" "Quit")
select opt in "${options[@]}"
do
    case $opt in
        "Laravel APP")
            echo "logging in to the kai-space..."
            docker exec -it kai-space bash
            ;;
        "Vue3 + Vite APP")
            echo "logging in to kai-space-front..."
            docker exec -it kai-space-front sh
            ;;
        "MYSQL server")
            echo "logging in to kai-space-mysql..."
            docker exec -it kai-space-mysql bash
            ;;
        "Quit")
            break
            ;;
        *) echo "invalid option $REPLY";;
    esac
done