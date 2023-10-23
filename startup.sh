#!/bin/sh
echo "开始下载msf"
wget http://downloads.metasploit.com/data/releases/metasploit-framework/apt/pool/main/m/metasploit-framework/metasploit-framework_6.3.39%2B20231016093420~1rapid7-1_arm64.deb > metasploit-framework.deb
dpkg -i metasploit-framework.deb
apt update
apt install -y postgresql
sudo service postgresql start
apt install -y nmap
curl test.ipw.cn
