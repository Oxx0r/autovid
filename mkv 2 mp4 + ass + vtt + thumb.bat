@echo off
color 17

:start
cls
title Oxx0r's mkv to mp4 / ass to vtt / Thumbnail Converter and ass eXtractor
echo:
echo	 ............................................
echo	 	#1	extract *.ass
echo	 	#2	convert *.ass to *.vtt
echo	 	#3	Make Thumbnail
echo	 	#4	*.mkv to *.mp4
echo	 	#5	*.mkv to *.mp4 + *.ass + thumb
echo	 	#6	export *.mkv mediainfo
echo	 	#0	Exit
echo	 ............................................
echo:
SET /P ANSWER=Auswahl:
REM echo %ANSWER%
if /i {%ANSWER%}=={1} (goto :1)
if /i {%ANSWER%}=={2} (goto :2)
if /i {%ANSWER%}=={3} (goto :3)
if /i {%ANSWER%}=={4} (goto :4)
if /i {%ANSWER%}=={5} (goto :5)
if /i {%ANSWER%}=={6} (goto :6)
if /i {%ANSWER%}=={0} (goto :0)
goto :error

:1
	for %%a in ("*.mkv") do (
		cls
		title %%a
		ffmpeg -i "%%a"  -map 0:s -c copy "%%~na.ass")
REM for %%a in ("*.mkv") do mkvextract tracks "%%a" -c UTF-8 2:"%%~na.ass"
pause
goto :start

:2
	for %%a in ("*.ass") do (
		cls
		title %%a
		ffmpeg -i "%%a"  "%%~na.vtt")
pause
goto :start

:3
	for %%a in ("*.mp4") do (
		cls
		title %%a
		ffmpeg -ss 00:00:15  -i "%%a" -q:v 1 -vframes 1 "%%~na.jpg" -y)
pause
goto :start

:4
	for %%a in ("*.mkv") do (
		cls
		title %%a
		ffmpeg -i "%%a" -metadata title="%%~na" -metadata comment="OxxReCode" -threads 8 -movflags +faststart -c:v copy -c:a copy "%%~na.mp4")
pause
goto :start

:5
	for %%a in ("*.mkv") do (
		cls
		title %%a
		ffmpeg -ss 00:00:15  -i "%%a" -q:v 1 -vframes 1 "%%~na.jpg"
		cls
		ffmpeg -i "%%a"  -map 0:s -c copy "%%~na.ass"
		cls
		mediainfo "%%a"
		mediainfo "%%a" > "%%~na.txt" -y
		cls
		ffmpeg -i "%%a" -metadata title="%%~na" -metadata comment="OxxReCode" -threads 8 -movflags +faststart -c:v copy -c:a copy "%%~na.mp4")
pause
goto :start

:6
	for %%a in ("*.mkv") do (
		cls
		title %%a
		mediainfo "%%a"
		mediainfo "%%a" > "%%~na.txt" -y)
pause
goto :start
:0
exit

:error

echo 
echo Error ...	Idiot ...
pause
goto :start



REM for %%a in ("*.mkv") do mkvextract tracks "%%a" -c UTF-8 2:"%%~na.ass"
REM for %%a in ("*.mkv") do ffmpeg -i "%%a"  -map 0:s -c copy "%%~na.ass"
REM for %%a in ("*.mp4") do ffmpeg -ss 00:00:02  -i "%%a" -q:v 1 -vframes 1 "%%~na .jpg" -y
REM for %%a in ("*.mkv") do ffmpeg -i "%%a" -vcodec copy -acodec copy "%%~na.mp4"
REM for %%a in ("*.ass") do ffmpeg -i "%%a"  "%%~na.vtt"
