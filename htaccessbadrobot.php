[html]
RewriteEngine On
[RewriteCond %{HTTP_USER_AGENT} ^BlackWidow [OR
[عنوان البريدRewriteCond %{HTTP_USER_AGENT} ^Bot\ mailto: craftbot@yahoo.com[1
اwلكتروني هذا محمي من روبوتات السبام. يجب عليك تفعيل الجافاسكربت لرؤيته. ][OR
[RewriteCond %{HTTP_USER_AGENT} ^ChinaClaw [OR
[RewriteCond %{HTTP_USER_AGENT} ^Custo [OR
[RewriteCond %{HTTP_USER_AGENT} ^DISCo [OR
[RewriteCond %{HTTP_USER_AGENT} ^GetWeb! [OR
[RewriteCond %{HTTP_USER_AGENT} ^Go!Zilla [OR
[RewriteCond %{HTTP_USER_AGENT} ^Go-Ahead-Got-It [OR
[RewriteCond %{HTTP_USER_AGENT} ^GrabNet [OR
[RewriteCond %{HTTP_USER_AGENT} ^Grafula [OR
[RewriteCond %{HTTP_USER_AGENT} ^HMView [OR
[RewriteCond %{HTTP_USER_AGENT} HTTrack [NC,OR
[RewriteCond %{HTTP_USER_AGENT} ^Image\ Stripper [OR
[RewriteCond %{HTTP_USER_AGENT} ^Image\ Sucker [OR
[RewriteCond %{HTTP_USER_AGENT} Indy\ Library [NC,OR
[RewriteCond %{HTTP_USER_AGENT} ^InterGET [OR
[RewriteCond %{HTTP_USER_AGENT} ^Internet\ Ninja [OR
[RewriteCond %{HTTP_USER_AGENT} ^JetCar [OR
[RewriteCond %{HTTP_USER_AGENT} ^JOC\ Web\ Spider [OR
[RewriteCond %{HTTP_USER_AGENT} ^larbin [OR
[RewriteCond %{HTTP_USER_AGENT} ^LeechFTP [OR
[RewriteCond %{HTTP_USER_AGENT} ^Website\ Quester [OR
[RewriteCond %{HTTP_USER_AGENT} ^WebStripper [OR
[RewriteCond %{HTTP_USER_AGENT} ^WebWhacker [OR
[RewriteCond %{HTTP_USER_AGENT} ^WebZIP [OR
[RewriteCond %{HTTP_USER_AGENT} ^Wget [OR
[RewriteCond %{HTTP_USER_AGENT} ^Widow [OR
[RewriteCond %{HTTP_USER_AGENT} ^WWWOFFLE [OR
[RewriteCond %{HTTP_USER_AGENT} ^Xaldon\ WebSpider [OR
RewriteCond %{HTTP_USER_AGENT} ^Zeus
[RewriteRule ^.* – [F,L
[html/]


#to protect your files and folders by password
# the folder that contain .htpasswds must be in folder besside the folder wwww [htdocs] of your site 
[html]
AuthUserFile /usr/local/you/safedir/.htpasswd
AuthGroupFile /dev/null
AuthName [write here author or what you want name and pwd to protect your files and folders]
AuthType Basic
order allow,deny
allow from all
require valid-user
[html/]

# example 2
[html]
AuthType Basic
"AuthName "stop
[html/]
“AuthUserFile “/home/[user name of the site]/htpasswds./
[html]
require valid-user
[html/]

// write the following in .htpasswds
[html]
Username1:Password1
[html/]

    
# md 5 encription for user name and pwd
[html]
badr:e1a378b86bc5c0203239b935e2964ba3
[html/]