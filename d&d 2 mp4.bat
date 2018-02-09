@echo off
title %~n1
ffmpeg -hwaccel cuvid -err_detect ignore_err -i %* -metadata comment="OxxReCode" -movflags +faststart -c:v h264_nvenc -preset llhq -rc:v vbr_hq -qmin:v 19 -qmax:v 21 -b:v 2500k -maxrate:v 5000k -profile:v high -bf:v 4 -c:a aac -b:a 128k "[OxxReCode] %~n1.mp4"
echo 
pause
