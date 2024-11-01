### Docker Compose
Docker Compose, çox konteynerli tətbiqlərin idarə edilməsi və işə salınması üçün praktik bir vasitədir və xidmətlərin asan idarə edilməsi, mühitlərin təkrarlanabilməsi və test və inkişaf proseslərinin asanlaşdırılması kimi üstünlüklərinə görə geniş istifadə olunur. Docker Compose ilə bütün tətbiqin xidmətləri və asılılıqları bir YAML faylında təyin olunur ki, bu da çoxsaylı xidmətlərin yalnız bir əmr ilə sənədləşdirilməsini və işə salınmasını asanlaşdırır. Bu vasitə konteynerlər arasında daxili şəbəkələr təmin edərək əlavə konfiqurasiyaya ehtiyac olmadan xidmətlər arasında ünsiyyəti sadələşdirir. Beləliklə, inkişaf etdiricilər istehsal mühitinə tam uyğun mühitlər yarada bilər və dəyişiklikləri inamla nəzərdən keçirə bilərlər.

[t01]: #
[t02]: https://github.com/samadelmakchi/docker/tree/main/kanboard
[t03]: https://github.com/samadelmakchi/docker/tree/main/nextcloud
[t04]: https://github.com/samadelmakchi/docker/tree/main/kimai
[t05]: #
[t06]: https://github.com/samadelmakchi/docker/tree/main/mattermost-focalboard
[t07]: #

[d01]: https://github.com/samadelmakchi/docker/tree/main/portainer
[d02]: #
[d03]: https://github.com/samadelmakchi/docker/tree/main/rabbitmq
[d04]: https://github.com/samadelmakchi/docker/tree/main/apprise
[d05]: https://github.com/samadelmakchi/docker/tree/main/vscode
[d06]: https://github.com/samadelmakchi/docker/tree/main/hakatime
[d07]: https://github.com/samadelmakchi/docker/tree/main/drawdb
[d08]: https://github.com/samadelmakchi/docker/tree/main/drawio

[s01]: #
[s02]: #
[s03]: https://github.com/samadelmakchi/docker/tree/main/uptime_kuma
[s04]: https://github.com/samadelmakchi/docker/tree/main/poste.io
[s05]: https://github.com/samadelmakchi/docker/tree/main/mailserver
[s06]: https://github.com/samadelmakchi/docker/tree/main/roundcube
[s07]: https://github.com/samadelmakchi/docker/tree/main/cypht
[s08]: https://github.com/samadelmakchi/docker/tree/main/elkarbackup
[s09]: #
[s10]: #

[o01]: #
[o02]: https://github.com/samadelmakchi/docker/tree/main/gitea
[o03]: #
[o04]: #
[o05]: #
[o06]: #
[o07]: https://github.com/samadelmakchi/docker/tree/main/prometheus-grafana
[o08]: https://github.com/samadelmakchi/docker/tree/main/elasticsearch-kibana-logstash
[o09]: https://github.com/samadelmakchi/docker/tree/main/vault-consul
[o10]: #

|DevOps                      |Development                     |Team Managment                 |Server                                 |
|------------------------------|--------------------------------|-------------------------------|---------------------------------------|
|VCS Hosting:<br/> [`Gitlab`][o01] [`Gitea`][o02]     |Container Management:<br/> [`Portainer`][d01] |Project Managment:<br/> [`Open Proect`][t01] |DNS:<br/> [`Webmin + Bind9`][s01]              |
|CI/CD:<br/> [`Jenkins`][o03] [`Gitlab CI`][o04]      |Repository Manager:<br/> [`Nexus`][d02]       |Task Managment:<br/> [`Kanboard`][t02]       |Reverse Proxy:<br/> [`Traefik`][s02]           |
|Ansible:<br/> [`AWX`][o05]                  |Message Broker:<br/> [`RabbitMQ`][d03]        |Cloud Storage:<br/> [`Nextcloud`][t03]       |Network Monitoring:<br/> [`Uptime Kuma`][s03]  |
|Terraform:<br/> [`Gaia`][o06]               |Push Notifications:<br/> [`Apprise`][d04]     |Time Tracking:<br/> [`Kimai`][t04]           |Mail Server:<br/> [`Poste.io`][s04] [`Mail Server`][s05] |
|Monitor:<br/> [`Grafana + Prometheus`][o07] |IDE:<br/> [`VS Code`][d05]                    |Password Managment:<br/> [`Teampass`][t05]   |Webmail Client:<br/> [`Roundcube`][s06] [`Cypht`][s07]  |
|Log Management:<br/> [`ELK`][o08]           |Time Tracking:<br/> [`HakaTime`][d06]         |Team Communication:<br/> [`Mattermost`][t06] |Backup:<br/> [`ElkarBackup`][s08]              |
|Service Mesh:<br/> [`Consul`][o09]          |Database Tools:<br/> [`DrawDB`][d07]          |Video Confrance:<br/> [`Slack`][t07]         |Database Backup:<br/> [][s09]                |
|Secret Management:<br/> [`Vault`][o09]      |Diagram Tools:<br/> [`Draw.io`][d08]          |                               |Firewall:<br/> [][s10]                       |


<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~  -->

<!-- 

 DEVOPS : Dozzle- SonarQube - Netdata - Semaphore
 Other : Wordpress - Joomla - Trudesk - Nextcloud

# بدون محتوا
 Gitlab | Jenkins | Webmin + Bind9 | AWX | Slack | Traefik | Nexus

# یافتن اپلیکیشن دیگر
 Open Proect | Teampass

# یافتن اپلیکیشن
 Database Backup | Firewall 

-->
