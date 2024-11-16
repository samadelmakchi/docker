### Docker Compose
Docker Compose is a practical tool for managing and running multi-container applications, widely used due to benefits such as simplicity in managing services, improved coordination and reproducibility of environments, and facilitating testing and development processes. With Docker Compose, all the services and dependencies of an application are defined in a single YAML file, making it easy to document and execute multiple services with a single command. This tool also simplifies communication between services by providing internal networks between containers without additional configuration. It enables developers to create environments identical to production, allowing them to confidently review changes and ensure reliable deployment.

[t01]: #
[t02]: https://github.com/samadelmakchi/docker/tree/main/kanboard
[t03]: https://github.com/samadelmakchi/docker/tree/main/nextcloud
[t04]: https://github.com/samadelmakchi/docker/tree/main/kimai
[t05]: #
[t06]: https://github.com/samadelmakchi/docker/tree/main/mattermost-focalboard
[t07]: #
[t08]: https://github.com/samadelmakchi/docker/tree/main/trudesk

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
[o07]: #
[o08]: https://github.com/samadelmakchi/docker/tree/main/prometheus-grafana
[o09]: #
[o10]: https://github.com/samadelmakchi/docker/tree/main/elasticsearch-kibana-logstash
[o11]: #
[o10]: https://github.com/samadelmakchi/docker/tree/main/vault-consul
[o13]: https://github.com/samadelmakchi/docker/tree/main/vault-consul
[o14]: #

[z01]: #
[z02]: #
[z03]: #
[z04]: #
[z05]: #
[z06]: #
[z07]: #
[z08]: #

|DevOps                                                       |Development                                   |Team Managment                               |Server                                                   |Dockerize           |
|-------------------------------------------------------------|----------------------------------------------|---------------------------------------------|---------------------------------------------------------|--------------------|
|VCS Hosting:<br/> [`Gitlab`][o01] [`Gitea`][o02]             |Container Management:<br/> [`Portainer`][d01] |Project Managment:<br/> [`Open Proect`][t01] |DNS:<br/> [`Webmin + Bind9`][s01]                        |[`FastAPI`][z01]    |
|CI/CD:<br/> [`Jenkins`][o03] [`Gitlab CI`][o04]              |Repository Manager:<br/> [`Nexus`][d02]       |Task Managment:<br/> [`Kanboard`][t02]       |Reverse Proxy:<br/> [`Traefik`][s02]                     |[`Django`][z02]     |
|Ansible:<br/> [`AWX`][o05] [`Semaphore`][o06]                |Message Broker:<br/> [`RabbitMQ`][d03]        |Cloud Storage:<br/> [`Nextcloud`][t03]       |Network Monitoring:<br/> [`Uptime Kuma`][s03]            |[`PHP`][z03]        |
|Terraform:<br/> [`Gaia`][o07]                                |Push Notifications:<br/> [`Apprise`][d04]     |Time Tracking:<br/> [`Kimai`][t04]           |Mail Server:<br/> [`Poste.io`][s04] [`Mail Server`][s05] |[`Nodejs`][z04]     |
|Monitor:<br/> [`Grafana + Prometheus`][o08] [`Netdata`][o09] |IDE:<br/> [`VS Code`][d05]                    |Password Managment:<br/> [``][t05]           |Webmail Client:<br/> [`Roundcube`][s06] [`Cypht`][s07]   |[`Vue`][z05]        |
|Log Management:<br/> [`ELK`][o10] [`Dozzle`][o11]            |Time Tracking:<br/> [`HakaTime`][d06]         |Team Communication:<br/> [`Mattermost`][t06] |Backup:<br/> [`ElkarBackup`][s08]                        |[`React`][z06]      |
|Service Mesh:<br/> [`Consul`][o12]                           |Database Tools:<br/> [`DrawDB`][d07]          |Video Confrance:<br/> [`Slack`][t07]         |Database Backup:<br/> [][s09]                            |[`Python ML`][z07]  |
|Secret Management:<br/> [`Vault`][o13]                       |Diagram Tools:<br/> [`Draw.io`][d08]          |Help Desk:<br/> [`Trudesk`][t08]             |Firewall:<br/> [][s10]                                   |                    |
|Code Quality Assurance:<br/> [`SonarQube`][o14]              |                                              |                                             |                                                         |[`Wordpress`][z08]  |

<!-- 
Whitout Content 
Gitlab | Jenkins | Webmin + Bind9 | AWX | Semaphore | Dozzle | Slack | Traefik | Nexus | Netdata | SonarQube

Find Tools
Database Backup | Firewall | Password Managment

Add
Dockerize : FastAPI - PostgreSQL
            Django - PostgreSQL
            PHP - Apache - MySQL - PHPMyAdmin
            PHP - Nginx - MySQL
            Nodejs - MongoDB
            Vue
            React
            Wordpress
-->

----

[z01]: README.md
[z02]: README-az.md
[z03]: README-tr.md
[z04]: README-fa.md

[1.z01]: https://raw.githubusercontent.com/samadelmakchi/samadelmakchi/main/flag/en.svg (English)
[1.z02]: https://raw.githubusercontent.com/samadelmakchi/samadelmakchi/main/flag/az.svg (Azərbaycani)
[1.z03]: https://raw.githubusercontent.com/samadelmakchi/samadelmakchi/main/flag/tr.svg (Türkisch)
[1.z04]: https://raw.githubusercontent.com/samadelmakchi/samadelmakchi/main/flag/fa.svg (فارسی)

### Translate
[![1.z04]][z04] [![1.z03]][z03] [![1.z02]][z02] 