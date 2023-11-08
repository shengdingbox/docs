#1 �ļ�{
```shell
    ls -rtl                                    # ��ʱ�䵹���г�����Ŀ¼���ļ� ll -rt
    touch file                                 # �����հ��ļ�
    rm -rf dirname                             # ����ʾɾ���ǿ�Ŀ¼(-r:�ݹ�ɾ�� -fǿ��)
    dos2unix                                   # windows�ı�תlinux�ı�
    unix2dos                                   # linux�ı�תwindows�ı�
    enca filename                              # �鿴����  ��װ yum install -y enca
    md5sum                                     # �鿴md5ֵ
    ln sourcefile newfile                      # Ӳ����
    ln -s sourcefile newfile                   # ��������
    readlink -f /data                          # �鿴������ʵĿ¼
    cat file | nl |less                        # �鿴���·�ҳ����ʾ�к�  q�˳�
    head                                       # �鿴�ļ���ͷ����
    head -c 10m                                # ��ȡ�ļ���10M����
    split -C 10M                               # ���ļ��и��СΪ10M -C����
    tail -f file                               # �鿴��β ������־�ļ�
    tail -F file                               # ������־������, ����ļ���mv��������Գ�����ȡ
    file                                       # ����ļ�����
    umask                                      # ����Ĭ��Ȩ��
    uniq                                       # ɾ���ظ�����
    uniq -c                                    # �ظ����г��ִ���
    uniq -u                                    # ֻ��ʾ���ظ���
    paste a b                                  # �������ļ��ϲ���tab���ָ���
    paste -d'+' a b                            # �������ļ��ϲ�ָ��'+'���Ÿ���
    paste -s a                                 # ���������ݺϲ���һ����tab������
    chattr +i /etc/passwd                      # ��������ı��ļ���Ŀ¼ -iȥ���� -R�ݹ�
    more                                       # ���·�����
    locate aaa                                 # ����
    wc -l file                                 # �鿴����
    cp filename{,.bak}                         # ���ٱ���һ���ļ�
    \cp a b                                    # ��������ʾ �Ȳ�ʹ�ñ��� cp -i
    rev                                        # �����е��ַ���������
    comm -12 2 3                               # �к��бȽ�ƥ��
    echo "10.45aa" |cksum                      # �ַ���ת���ֱ��룬����У�飬Ҳ�������ļ�У��
    iconv -f gbk -t utf8 source.txt > new.txt  # ת������
    xxd /boot/grub/stage1                      # 16���Ʋ鿴
    hexdump -C /boot/grub/stage1               # 16���Ʋ鿴
    rename source new file                     # ������ ������
    watch -d -n 1 'df; ls -FlAt /path'         # ʵʱĳ��Ŀ¼�²鿴���¸Ķ������ļ�
    cp -v  /dev/dvd  /rhel4.6.iso9660          # ��������
    diff suzu.c suzu2.c  > sz.patch            # ��������
    patch suzu.c < sz.patch                    # ��װ����
```
##    sort����{
```shell

        -t                                     # ָ������ʱ���õ���λ�ָ��ַ�
        -n                                     # ������ֵ�Ĵ�С����
        -r                                     # ���෴��˳��������
        -f                                     # ����ʱ����Сд��ĸ��Ϊ��д��ĸ
        -d                                     # ����ʱ������Ӣ����ĸ�����ּ��ո��ַ��⣬�����������ַ�
        -c                                     # ����ļ��Ƿ��Ѿ�����˳������
        -b                                     # ����ÿ��ǰ�濪ʼ���Ŀո��ַ�
        -M                                     # ǰ��3����ĸ�����·ݵ���д��������
        -k                                     # ָ����
        -m                                     # ����������õ��ļ����кϲ�
        -T                                     # ָ����ʱ�ļ�Ŀ¼,Ĭ����/tmp
        -o                                     # �������Ľ������ָ������        

        sort -n                                # ����������
        sort -nr                               # �����ֵ���
        sort -u                                # �����ظ���
        sort -m a.txt c.txt                    # �������ļ��������ϵ�һ��
        sort -n -t' ' -k 2 -k 3 a.txt          # �ڶ�����ͬ�����ӵ����������������
        sort -n -t':' -k 3r a.txt              # ��:Ϊ�ָ���ĵ�������е�������
        sort -k 1.3 a.txt                      # �ӵ�������ĸ���������
        sort -t" " -k 2n -u  a.txt             # �Եڶ������������������ظ��ģ���ɾ��

```

##    find����{
```shell

        # linux�ļ��޴���ʱ��
        # Access ʹ��ʱ��
        # Modify �����޸�ʱ��
        # Change ״̬�ı�ʱ��(Ȩ�ޡ�����)
        # ʱ��Ĭ����24СʱΪ��λ,��ǰʱ�䵽��ǰ24СʱΪ0��,��ǰ48-72СʱΪ2��
        # -and �� ƥ���������� ��������ȷ��ʱ�䷶Χ -mtime +2 -and -mtime -4
        # -or �� ƥ������һ������

        find /etc -name "*http*"                                # ���ļ�������
        find . -type f                                          # ����ĳһ�����ļ�
        find / -perm                                            # �����ļ�Ȩ�޲���
        find / -user                                            # �����ļ���������
        find / -group                                           # �����ļ����������������ļ�
        find / -atime -n                                        # �ļ�ʹ��ʱ����N������
        find / -atime +n                                        # �ļ�ʹ��ʱ����N����ǰ
        find / -mtime +n                                        # �ļ����ݸı�ʱ����N����ǰ
        find / -ctime +n                                        # �ļ�״̬�ı�ʱ����N��ǰ
        find / -mmin +30                                        # �����Ӳ������ݸı�
        find / -size +1000000c -print                           # �����ļ����ȴ���1M�ֽڵ��ļ�
        find /etc -name "*passwd*" -exec grep "xuesong" {} \;   # �����ֲ����ļ����ݸ�-exec������
        find . -name 't*' -exec basename {} \;                  # �����ļ���,��ȡ·��
        find . -type f -name "err*" -exec  rename err ERR {} \; # ��������(����err �滻Ϊ ERR {}�ļ�
        find path -name *name1* -or -name *name2*               # ��������һ���ؼ���

```

##    vim�༭��{
```shell

        # ��������
        set smartindent
        set tabstop=4
        set shiftwidth=4
        set expandtab
        set softtabstop=4
        set noautoindent
        set nosmartindent
        set paste
        set clipboard=unnamed

        gconf-editor           # ���ñ༭��
        /etc/vimrc             # �����ļ�·��
        vim +24 file           # ���ļ���λ��ָ����
        vim file1 file2        # �򿪶���ļ�
        vim  -r file           # �ָ��ϴ��쳣�رյ��ļ� .file.swp 
        vim -O2 file1 file2    # ��ֱ����
        vim -on file1 file2    # ˮƽ����
        Ctrl+ U                # ��ǰ��ҳ
        Ctrl+ D                # ���ҳ
        Ctrl+ww                # �ڴ��ڼ��л�
        Ctrl+w +or-or=         # �����߶�
        :sp filename           # ���·ָ�����ļ�
        :vs filename           # ���ҷָ�����ļ�
        :set nu                # ���к�
        :set nonu              # ȡ���к�
        :nohl                  # ȡ������
        :set paste             # ȡ������
        :set autoindent        # �����Զ�����
        :set ff                # �鿴�ı���ʽ
        :set binary            # ��Ϊunix��ʽ
        :%s/str/newstr/g       # ȫ���滻
        :200                   # ��ת��200  1 �ļ�ͷ
        G                      # ������β
        dd                     # ɾ����ǰ�� ������ ��ֱ��pճ��
        11111dd                # ɾ��11111�У�����������ļ�
        r                      # �滻�����ַ�
        R                      # �滻����ַ�
        u                      # �����ϴβ���
        *                      # ȫ��ƥ�䵱ǰ��������ַ���
        $                      # ��β
        0                      # ����
        X                      # �ĵ�����
        v =                    # �Զ���ʽ������
        Ctrl+v                 # ����ģʽ
        Ctrl+v I ESC           # ���в���
        Ctrl+v s ESC           # ����ȡ��ע��

```

##    �鵵��ѹ��{
```shell

        tar zxvpf gz.tar.gz  dir                         # ���ָ��tar.gz�е�����  ��ָ��Ŀ¼��ȫ��ѹ
        tar zcvpf /$path/gz.tar.gz *                     # ���gz ע��*��������·��
        tar zcf /$path/gz.tar.gz *                       # �����ȷ����ʾ
        tar ztvpf gz.tar.gz                              # �鿴gz
        tar xvf 1.tar -C dir                             # ���tar �ŵ�ָ��Ŀ¼
        tar -cvf 1.tar *                                 # ���tar
        tar tvf 1.tar                                    # �鿴tar
        tar -rvf 1.tar filename                          # ��tar׷���ļ�
        tar --exclude=/home/dmtsai --exclude=*.tar -zcvf myfile.tar.gz /home/* /etc      # ���/home, /etc �����ų� /home/dmtsai
        tar -N "2005/06/01" -zcvf home.tar.gz /home      # �� /home ���У��� 2005/06/01 �µ��ļ��ű���
        tar -zcvfh home.tar.gz /home                     # ���Ŀ¼�а�������Ŀ¼
        tar zcf - ./ | ssh root@IP "tar zxf - -C /xxxx"  # һ��ѹ��һ�߽�ѹ
        zgrep str 1.gz                                   # �鿴ѹ�������ļ��ַ���
        bzip2  -dv 1.tar.bz2                             # ��ѹbzip2
        bzip2 -v 1.tar                                   # bzip2ѹ��
        bzcat                                            # �鿴bzip2
        gzip file                                        # ֱ��ѹ���ļ� # ѹ����Դ�ļ���ʧ
        gunzip file.gz                                   # ֱ�ӽ�ѹ�ļ� # ��ѹ��Դ�ļ���ʧ
        gzip -r dir/                                     # �ݹ�ѹ��Ŀ¼
        gzip  -r -d dir/                                 # �ݹ��ѹĿ¼
        gzip -dv 1.tar.gz                                # ��ѹgzip��tar
        gzip -v 1.tar                                    # ѹ��tar��gz
        unzip zip.zip                                    # ��ѹzip
        zip zip.zip *                                    # ѹ��zip
        rar a rar.rar *.jpg                              # ѹ���ļ�Ϊrar��
        unrar x rar.rar                                  # ��ѹrar��

```

##    �ļ�ACLȨ�޿���{
```shell

        getfacl 1.test                      # �鿴�ļ�ACLȨ��
        setfacl -R -m u:xuesong:rw- 1.test  # ���ļ������û��Ķ�дȨ�� -R �ݹ�

```

##    svn{
```shell

        --force # ǿ�Ƹ���
        /usr/bin/svn --username user --password passwd co  $Code  ${SvnPath}src/                 # ���������Ŀ
        /usr/bin/svn --username user --password passwd up  $Code  ${SvnPath}src/                 # ������Ŀ
        /usr/bin/svn --username user --password passwd export  $Code$File ${SvnPath}src/$File    # ���������ļ�
        /usr/bin/svn --username user --password passwd export -r �汾�� svn·�� ����·�� --force   # ����ָ���汾

```

##    git{
```shell

        git clone git@10.10.10.10:gittest.git  ./gittest/  # ��¡��Ŀ��ָ��Ŀ¼
        git clone  -b develop --depth=1 http://git.a.com/d.git   # ��¡ָ����֧ ��¡һ��
        git status                                         # Show the working tree(������) status
        git log -n 1 --stat                                # �鿴���һ����־�ļ�
        git branch -a                                      # �г�Զ�̸��ٷ�֧(remote-tracking branches)�ͱ��ط�֧
        git checkout developing                            # �л���developing��֧
        git checkout -b release                            # �л���֧û�дӵ�ǰ��֧����
        git checkout -b release origin/master              # ��Զ�̷�֧�������ؾ����֧
        git push origin --delete release                   # ��Զ��ɾ��������������п������ñ���������ɾ��
        git push origin release                            # �ѱ��ط�֧�ύ��Զ��
        git pull                                           # ������Ŀ ��Ҫcd����ĿĿ¼��
        git fetch -f -p                                    # ץȡԶ�˴��뵫���ϲ�����ǰ
        git reset --hard origin/master                     # ��Զ��ͬ����֧
        git add .                                          # ���������ļ�
        git commit -m "gittest up"                         # �ύ��������ӱ�ע
        git push                                           # ��ʽ�ύ��Զ��git������
        git push [-u origin master]                        # ��ʽ�ύ��Զ��git������(master��֧)
        git tag [-a] dev-v-0.11.54 [-m 'fix #67']          # ����tag,��Ϊdev-v-0.11.54,��עfix #67
        git tag -l dev-v-0.11.54                           # �鿴tag(dev-v-0.11.5)
        git push origin --tags                             # �ύtag
        git reset --hard                                   # ���ػָ�������Ŀ
        git rm -r -n --cached  ./img                       # -nִ������ʱ,����ɾ���κ��ļ�,����չʾ������Ҫɾ�����ļ��б�Ԥ��
        git rm -r --cached  ./img                          # ִ��ɾ������ ��Ҫcommit��push��Զ����Ч
        git init --bare smc-content-check.git              # ��ʼ����git��Ŀ  ��Ҫ�ֶ�������Ŀ¼����git�û�Ȩ�� chown -R git:git smc-content-check.git
        git config --global credential.helper store        # ��ס����
        git config [--global] user.name "your name"        # ��������û���, ϣ����һ���ض�����Ŀ��ʹ�ò�ͬ���û���e-mail��ַ, ��Ҫ--globalѡ��
        git config [--global] user.email "your email"      # �������e-mail��ַ, ÿ��Git�ύ����ʹ�ø���Ϣ
        git config [--global] user.name                    # �鿴�û���
        git config [--global] user.email                   # �鿴�û�e-mail
        git config --global --edit                         # �༭~/.gitconfig(User-specific)�����ļ�, ֵ���ȼ�����/etc/gitconfig(System-wide)
        git config --edit                                  # �༭.git/config(Repository specific)�����ļ�, ֵ���ȼ�����~/.gitconfig
        git cherry-pick  <commit id>                       # ���ڰ���һ�����ط�֧��commit�޸�Ӧ�õ���ǰ��֧ ��Ҫpush��Զ��
        git log --pretty=format:'%h: %s' 9378b62..HEAD     # �鿴ָ����Χ���²��� commit id
        git config --global core.ignorecase false          # ����ȫ�ִ�Сд����
        git ls-remote --heads origin refs/heads/test       # �鿴
```

##        ��Զ����һ���µ�{
```shell
            # You have not concluded your merge (MERGE_HEAD exists)  git��ȡʧ��
            git fetch --hard origin/master
            git reset --hard origin/master
    ```

##        ɾ��Զ�̷�֧���½�{
```shell
            git checkout master
            git branch -r -d origin/test       # ɾ��Զ�̷�֧  ����ʱ��û��ɾ�� ���Գ���ʹ����������
            git push origin :test              # ����һ���շ�֧��Զ�̷�֧���൱��ɾ��Զ�̷�֧
            git branch -d test                 # ɾ������test��֧, -D ǿ��
            git branch -a |grep test
            git checkout -b test
            git push origin test

            git reset --hard origin/test 
    ```

##        Ǩ��git��Ŀ{
```shell
            git branch -r | grep -v '\->' | while read remote; do git branch --track "${remote#origin/}" "$remote"; done
            git fetch --all
            git pull --all
            git remote set-url origin git@git.github.cn:server/gw.git
            git push --all
   
```

##    �ָ�rmɾ�����ļ�{
```shell

        # debugfs��� ext2   # ext3grep��� ext3   # extundelete��� ext4
        df -T   # ���Ȳ鿴���̷�����ʽ
        umount /data/     # ж�ع���,���ݶ�ʧ������ж�ع���,�����¹���ֻ��
        ext3grep /dev/sdb1 --ls --inode 2         # ��¼��Ϣ��������Ŀ¼���ļ�inode��Ϣ
        ext3grep /dev/sdb1 --ls --inode 131081    # �˴���inode
        ext3grep /dev/sdb1 --restore-inode 49153  # ��¼��inode��Ϣ��ʼ�ָ�Ŀ¼

```

##    openssl{
```shell

        openssl rand 15 -base64            # ��������
        openssl sha1 filename              # ��ϣ�㷨У���ļ�
        openssl md5 filename               # MD5У���ļ�
        openssl base64   filename.txt      # base64����/�����ļ�(�����ʼ�����֮�๦�ܻ����ʹ��)
        openssl base64 -d   filename.bin   # base64����/����������ļ�
        openssl enc -aes-128-cbc   filename.aes-128-cbc                  # �����ĵ�
        # �Ƽ�ʹ�õļ����㷨��bf(Blowfish)��-aes-128-cbc(������CBCģʽ��128λ�ܳ�AES�����㷨)������ǿ���б���
        openssl enc -d -aes-128-cbc -in filename.aes-128-cbc > filename  # �����ĵ�

```

}

#2 ���{

##    rpm{
```shell

        rpm -ivh lynx          # rpm��װ
        rpm -e lynx            # ж�ذ�
        rpm -e lynx --nodeps   # ǿ��ж��
        rpm -qa                # �鿴���а�װ��rpm��
        rpm -qa | grep lynx    # ���Ұ��Ƿ�װ
        rpm -ql                # �����·��
        rpm -Uvh               # ������
        rpm --test lynx        # ����
        rpm -qc                # ����������ĵ�
        rpm --initdb           # ��ʼ��rpm ���ݿ�
        rpm --rebuilddb        # �ؽ�rpm���ݿ�  ��rpm��yum����Ӧ�����ʹ�� �� rm -f /var/lib/rpm/__db.00* ���ؽ�

```

##    yum{
```shell

        yum list                 # ��������б�
        yum install ����          # ��װ����������
        yum -y update            # �������а��汾,������ϵ��ϵͳ�汾�ں˶�����
        yum -y update �������    # ����ָ���������
        yum -y upgrade           # ���ı�������ø��������ϵͳ�汾�������ں˲��ı�
        yum search mail          # yum������ذ�
        yum grouplist            # �������
        yum -y groupinstall "Virtualization"   # ��װ�������
        repoquery -ql gstreamer  # ����װ����鿴�����ļ�
        yum clean all            # ���var�»���

```

##    yumʹ��epelԴ{
```shell

        # �����ص�ַ: http://download.fedoraproject.org/pub/epel   # ѡ��汾5\6\7
        rpm -Uvh  http://mirrors.hustunique.com/epel//6/x86_64/epel-release-6-8.noarch.rpm

        # ������汾
        yum install epel-release

```

##    �Զ���yumԴ{
```shell

        find /etc/yum.repos.d -name "*.repo" -exec mv {} {}.bak \;

        vim /etc/yum.repos.d/yum.repo
        [yum]
        #http
        baseurl=http://10.0.0.1/centos5.5
        #����iso
        #mount -o loop CentOS-5.8-x86_64-bin-DVD-1of2.iso /data/iso/
        #����
        #baseurl=file:///data/iso/
        enable=1

        #����key
        rpm --import  /etc/pki/rpm-gpg/RPM-GPG-KEY-CentOS-5

```

##    ����
###        Դ�밲װ{
```shell

            ./configure --help                   # �鿴���б������
            ./configure  --prefix=/usr/local/    # ���ò���
            make                                 # ����
            # make -j 8                          # ���̱߳���,�ٶȽϿ�,����Щ�����֧��
            make install                         # ��װ��
            make clean                           # ���������

```

###        perl�������{
```shell

            perl Makefile.PL
            make
            make test
            make install

    ```

###        python�������{
```shell

            python file.py

            # Դ������밲װ
            python setup.py build
            python setup.py install

    ```

###        ����c����{
```shell

            gcc -g hello.c -o hello

```



}

#3 ϵͳ{
```shell
    wall                                          # �������û�����Ϣ
    whereis ls                                    # ����������������ֻ�����������ļ�
    which                                         # ���������Ƿ����,�����λ��
    locate                                        # ����ʵʱ���ң����ҵĽ������ȷ���������ٶȺܿ� ÿ����� /var/lib/locatedb
    clear                                         # ���������Ļ
    reset                                         # ���³�ʼ����Ļ
    cal                                           # ��ʾ����
    echo -n 123456 | md5sum                       # md5����
    mkpasswd                                      # �����������   -lλ�� -C��С -cСд -d���� -s�����ַ�
    netstat -ntupl | grep port                    # �Ƿ����ĳ���˿�
    ntpdate cn.pool.ntp.org                       # ͬ��ʱ��, pool.ntp.org: public ntp time server for everyone(http://www.pool.ntp.org/zh/)
    tzselect                                      # ѡ��ʱ�� #+8=(5 9 1 1) # (TZ='Asia/Shanghai'; export TZ)������д�� /etc/profile
    /sbin/hwclock -w                              # ʱ�䱣�浽Ӳ��
    /etc/shadow                                   # �˻�Ӱ���ļ�
    LANG=en                                       # �޸�����
    vim /etc/sysconfig/i18n                       # �޸ı���  LANG="en_US.UTF-8"
    export LC_ALL=C                               # ǿ���ַ���
    vi /etc/hosts                                 # ��ѯ��̬������
    alias                                         # ����
    watch uptime                                  # ������̬ˢ�� ����
    ipcs -a                                       # �鿴Linuxϵͳ��ǰ���������ڴ�ε����ֵ
    ldconfig                                      # ��̬���ӿ��������
    ldd `which cmd`                               # �鿴�����������
    dist-upgrade                                  # ��ı������ļ�,�ı�ɵ�������ϵ���ı�ϵͳ�汾
    /boot/grub/grub.conf                          # grub����������
    ps -mfL <PID>                                 # �鿴ָ�������������߳� �߳����� max user processes ����
    ps uxm |wc -l                                 # �鿴��ǰ�û�ռ�õĽ����� [�����߳�]  max user processes
    top -p  PID -H                                # �鿴ָ��PID���̼��߳�
    lsof |wc -l                                   # �鿴��ǰ�ļ������ʹ������  open files
    lsof |grep /lib                               # �鿴���ؿ��ļ�
    sysctl -a                                     # �鿴��ǰ����ϵͳ�ں˲���
    sysctl -p                                     # �޸��ں˲���/etc/sysctl.conf����/etc/rc.d/rc.sysinit��ȡ��Ч
    strace -p pid                                 # ����ϵͳ����
    ps -eo "%p %C  %z  %a"|sort -k3 -n            # �ѽ��̰��ڴ�ʹ�ô�С����
    strace uptime 2>&1|grep open                  # �鿴����򿪵�����ļ�
    grep Hugepagesize /proc/meminfo               # �ڴ��ҳ��С
    mkpasswd -l 8  -C 2 -c 2 -d 4 -s 0            # �������ָ����������
    echo 1 > /proc/sys/net/ipv4/tcp_syncookies    # ʹTCP SYN Cookie ������Ч  # "SYN Attack"��һ�־ܾ�����Ĺ�����ʽ
    grep Swap  /proc/25151/smaps |awk '{a+=$2}END{print a}'    # ��ѯĳpidʹ�õ�swap��С
    redir --lport=33060 --caddr=10.10.10.78 --cport=3306       # �˿�ӳ�� yum��װ ��supervisor�ػ�
```
##    ���������ű�˳��{
```shell

        /etc/profile
        /etc/profile.d/*.sh
        ~/bash_profile
        ~/.bashrc
        /etc/bashrc

```

##    ���̹���{
```shell

        ps -eaf               # �鿴���н���
        kill -9 PID           # ǿ����ֹĳ��PID����
        kill -15 PID          # ��ȫ�˳� ������ڲ������ź�
        cmd &                 # �����̨����
        nohup cmd &           # ��̨���в���shell�˳�Ӱ��
        ctrl+z                # ��ǰ̨�����̨(��ͣ)
        jobs                  # �鿴��̨���г���
        bg 2                  # ������̨��ͣ����
        fg 2                  # ���غ�̨����
        pstree                # ������
        vmstat 1 9            # ÿ��һ�뱨��ϵͳ������Ϣ9��
        sar                   # �鿴cpu��״̬
        lsof file             # ��ʾ��ָ���ļ������н���
        lsof -i:32768         # �鿴�˿ڵĽ���
        renice +1 180         # ��180�Ž��̵����ȼ���1
        exec sh a.sh          # �ӽ����滻ԭ�������pid�� ����supervisor�޷�ǿ��ɱ������
```
##        ps{
```shell

            ps aux |grep -v USER | sort -nk +4 | tail       # ��ʾ�����ڴ�����10�������еĽ��̣����ڴ�ʹ��������.cpu +3
            # USER       PID %CPU %MEM    VSZ   RSS TTY      STAT START   TIME COMMAND
            %CPU     # ���̵�cpuռ����
            %MEM     # ���̵��ڴ�ռ����
            VSZ      # ���������С,��λK(����ռ���ڴ��С,������ʵ�ڴ�������ڴ�)
            RSS      # ����ʹ�õ�פ������С��ʵ�������ڴ��С
            START    # ��������ʱ�������
            ռ�õ������ڴ��С = VSZ - RSS

            ps -eo pid,lstart,etime,args         # �鿴��������ʱ��

```

##        top{
```shell

            ǰ������ϵͳ�����ͳ����Ϣ��
            ��һ��: ���������Ϣ��ͬ uptime �����ִ�н�����������£�
                01:06:48 ��ǰʱ��
                up 1:22 ϵͳ����ʱ�䣬��ʽΪʱ:��
                1 user ��ǰ��¼�û���
                load average: 0.06, 0.60, 0.48 ϵͳ���أ���������е�ƽ�����ȡ�
                ������ֵ�ֱ�Ϊ 1���ӡ�5���ӡ�15����ǰ�����ڵ�ƽ��ֵ��

            �ڶ�������:Ϊ���̺�CPU����Ϣ�����ж��CPUʱ����Щ���ݿ��ܻᳬ�����С��������£�
                Tasks: 29 total ��������
                1 running �������еĽ�����
                28 sleeping ˯�ߵĽ�����
                0 stopped ֹͣ�Ľ�����
                0 zombie ��ʬ������
                Cpu(s): 0.3% us �û��ռ�ռ��CPU�ٷֱ�
                1.0% sy �ں˿ռ�ռ��CPU�ٷֱ�
                0.0% ni �û����̿ռ��ڸı�����ȼ��Ľ���ռ��CPU�ٷֱ�
                98.7% id ����CPU�ٷֱ�
                0.0% wa �ȴ����������CPUʱ��ٷֱ�
                0.0% hi
                0.0% si

            ���ġ�����:Ϊ�ڴ���Ϣ���������£�
                Mem: 191272k total �����ڴ�����
                173656k used ʹ�õ������ڴ�����
                17616k free �����ڴ�����
                22052k buffers �����ں˻�����ڴ���
                Swap: 192772k total ����������
                0k used ʹ�õĽ���������
                192772k free ���н���������
                123988k cached ����Ľ�����������
                �ڴ��е����ݱ��������������������ֱ����뵽�ڴ棬��ʹ�ù��Ľ�������δ�����ǣ�
                ����ֵ��Ϊ��Щ�����Ѵ������ڴ��еĽ������Ĵ�С��
                ��Ӧ���ڴ��ٴα�����ʱ�ɲ����ٶԽ�����д�롣

            ������Ϣ��,���еĺ�������:  # ��ʾ�������̵���ϸ��Ϣ

            ��� ����    ����
            a   PID      ����id
            b   PPID     ������id
            c   RUSER    Real user name
            d   UID      ���������ߵ��û�id
            e   USER     ���������ߵ��û���
            f   GROUP    ���������ߵ�����
            g   TTY      �������̵��ն��������Ǵ��ն������Ľ�������ʾΪ ?
            h   PR       ���ȼ�
            i   NI       niceֵ����ֵ��ʾ�����ȼ�����ֵ��ʾ�����ȼ�
            j   P        ���ʹ�õ�CPU�����ڶ�CPU������������
            k   %CPU     �ϴθ��µ����ڵ�CPUʱ��ռ�ðٷֱ�
            l   TIME     ����ʹ�õ�CPUʱ���ܼƣ���λ��
            m   TIME+    ����ʹ�õ�CPUʱ���ܼƣ���λ1/100��
            n   %MEM     ����ʹ�õ������ڴ�ٷֱ�
            o   VIRT     ����ʹ�õ������ڴ���������λkb��VIRT=SWAP+RES
            p   SWAP     ����ʹ�õ������ڴ��У��������Ĵ�С����λkb��
            q   RES      ����ʹ�õġ�δ�������������ڴ��С����λkb��RES=CODE+DATA
            r   CODE     ��ִ�д���ռ�õ������ڴ��С����λkb
            s   DATA     ��ִ�д�������Ĳ���(���ݶ�+ջ)ռ�õ������ڴ��С����λkb
            t   SHR      �����ڴ��С����λkb
            u   nFLT     ҳ��������
            v   nDRT     ���һ��д�뵽���ڣ����޸Ĺ���ҳ������
            w   S        ����״̬��
                D=�����жϵ�˯��״̬
                R=����
                S=˯��
                T=����/ֹͣ
                Z=��ʬ���� �������ڵ������ȴ��ӽ���
            x   COMMAND  ������/������
            y   WCHAN    ���ý�����˯�ߣ�����ʾ˯���е�ϵͳ������
            z   Flags    �����־���ο� sched.h

    ```

##        �г�����ռ��swap�Ľ���{
```shell

            #!/bin/bash
            echo -e "PID\t\tSwap\t\tProc_Name"
            # �ó�/procĿ¼������������Ϊ����Ŀ¼�������������ֲ��ǽ��̣�������sys,net�ȴ�ŵ���������Ϣ��
            for pid in `ls -l /proc | grep ^d | awk '{ print $9 }'| grep -v [^0-9]`
            do
                # �ý����ͷ�swap�ķ���ֻ��һ�������������ý��̡����ߵ����Զ��ͷš���
                # ������̻��Զ��ͷţ���ô���ǾͲ���д�ű��������ˣ�����������Ϊ��û���Զ��ͷš�
                # ��������Ҫ�г�ռ��swap����Ҫ�����Ľ��̣�����init���������ϵͳ�����н��̵����Ƚ���
                # ����init������ζ������ϵͳ���������򲻿��Եģ����ԾͲ��ؼ�����ˣ������ϵͳ���Ӱ�졣
                if [ $pid -eq 1 ];then continue;fi
                grep -q "Swap" /proc/$pid/smaps 2>/dev/null
                if [ $? -eq 0 ];then
                    swap=$(grep Swap /proc/$pid/smaps \
                        | gawk '{ sum+=$2;} END{ print sum }')
                    proc_name=$(ps aux | grep -w "$pid" | grep -v grep \
                        | awk '{ for(i=11;i<=NF;i++){ printf("%s ",$i); }}')
                    if [ $swap -gt 0 ];then
                        echo -e "${pid}\t${swap}\t${proc_name}"
                    fi
                fi
            done | sort -k2 -n | awk -F'\t' '{
                pid[NR]=$1;
                size[NR]=$2;
                name[NR]=$3;
            END{
                for(id=1;id<=length(pid);id++)
                {
                    if(size[id]<1024)
                        printf("%-10s\t%15sKB\t%s\n",pid[id],size[id],name[id]);
                    else if(size[id]<1048576)
                        printf("%-10s\t%15.2fMB\t%s\n",pid[id],size[id]/1024,name[id]);
                    else
                        printf("%-10s\t%15.2fGB\t%s\n",pid[id],size[id]/1048576,name[id]);
}
```
##        linux����ϵͳ�ṩ���ź�{
```shell

            kill -l                    # �鿴linux�ṩ���ź�
            trap "echo aaa"  2 3 15    # shellʹ�� trap ��׽�˳��ź�

            # �����ź�һ��������ԭ��:
            #   1(����ʽ)  �ں˼�⵽һ��ϵͳ�¼�.�����ӽ����˳����񸸽��̷���SIGCHLD�ź�.���̰���control+c�ᷢ��SIGINT�ź�
            #   2(����ʽ)  ͨ��ϵͳ����kill����ָ�����̷����ź�
            # ���̽����ź� SIGTERM �� SIGKILL ������:  SIGTERM �Ƚ��Ѻã������ܲ�׽����źţ�����������Ҫ���رճ����ڹرճ���֮ǰ�������Խ����򿪵ļ�¼�ļ��������������������ĳЩ����£�����������ڽ�����ҵ���Ҳ����жϣ���ô���̿��Ժ������SIGTERM�źš�
            # ���һ�������յ�һ��SIGUSR1�źţ�Ȼ��ִ���źŰ󶨺������ڶ���SIGUSR2�ź������ˣ���һ���ź�û�б�������ϵĻ����ڶ����źžͻᶪ����

            SIGHUP  1          A     # �ն˹�����߿��ƽ�����ֹ
            SIGINT  2          A     # �����ն˽���(��control+c)
            SIGQUIT 3          C     # ���̵��˳���������
            SIGILL  4          C     # �Ƿ�ָ��
            SIGABRT 6          C     # ��abort(3)�������˳�ָ��
            SIGFPE  8          C     # �����쳣
            SIGKILL 9          AEF   # Kill�ź�  ����ֹͣ
            SIGSEGV 11         C     # ��Ч���ڴ�����
            SIGPIPE 13         A     # �ܵ�����: дһ��û�ж��˿ڵĹܵ�
            SIGALRM 14         A     # �����ź� ��alarm(2)�������ź�
            SIGTERM 15         A     # ��ֹ�ź�,���ó���ȫ�˳� kill -15
            SIGUSR1 30,10,16   A     # �û��Զ����ź�1
            SIGUSR2 31,12,17   A     # �û��Զ����ź�2
            SIGCHLD 20,17,18   B     # �ӽ��̽����Զ��򸸽��̷���SIGCHLD�ź�
            SIGCONT 19,18,25         # ���̼���������ֹͣ�Ľ��̣�
            SIGSTOP 17,19,23   DEF   # ��ֹ����
            SIGTSTP 18,20,24   D     # �����նˣ�tty���ϰ���ֹͣ��
            SIGTTIN 21,21,26   D     # ��̨������ͼ�ӿ����ն˶�
            SIGTTOU 22,22,27   D     # ��̨������ͼ�ӿ����ն�д

            ȱʡ������һ���е���ĸ��������:
                A  ȱʡ�Ķ�������ֹ����
                B  ȱʡ�Ķ����Ǻ��Դ��źţ������źŶ�������������
                C  ȱʡ�Ķ�������ֹ���̲������ں�ӳ��ת��(dump core),�ں�ӳ��ת����ָ�������������ڴ��ӳ��ͽ������ں˽ṹ�еĲ���������һ����ʽת�����ļ�ϵͳ�����ҽ����˳�ִ�У��������ĺô���Ϊ����Ա�ṩ�˷��㣬ʹ�����ǿ��Եõ����̵�ʱִ��ʱ������ֵ����������ȷ��ת����ԭ�򣬲��ҿ��Ե������ǵĳ���
                D  ȱʡ�Ķ�����ֹͣ���̣�����ֹͣ״���Ժ������½�����ȥ��һ�����ڵ��ԵĹ����У�����ptraceϵͳ���ã�
                E  �źŲ��ܱ�����
                F  �źŲ��ܱ�����
```

##        ϵͳ����״̬{
```shell

            vmstat 1 9

            r      # �ȴ�ִ�е��������������ֵ������cpu�߳������ͻ����cpuƿ����
            b      # �ȴ�IO�Ľ�������,��ʾ�����Ľ��̡�
            swpd   # �����ڴ���ʹ�õĴ�С�������0����ʾ���������ڴ治�㣬�粻�ǳ����ڴ�й¶����ô�������ڴ档
            free   # ���е������ڴ�Ĵ�С
            buff   # ���õ�buff��С���Կ��豸�Ķ�д���л���
            cache  # cacheֱ�������������Ǵ򿪵��ļ�,���ļ������壬(�ѿ��е������ڴ��һ�����������ļ���Ŀ¼�Ļ��棬��Ϊ����� ����ִ�е����ܣ�������ʹ���ڴ�ʱ��buffer/cached��ܿ�ر�ʹ�á�)
            inact  # �ǻ�Ծ�ڴ��С�����������ɻ��յ��ڴ棬������free��active -aѡ��ʱ��ʾ
            active # ��Ծ���ڴ��С -aѡ��ʱ��ʾ
            si   # ÿ��Ӵ��̶��������ڴ�Ĵ�С��������ֵ����0����ʾ�����ڴ治���û����ڴ�й¶��Ҫ���Һ��ڴ���̽������
            so   # ÿ�������ڴ�д����̵Ĵ�С��������ֵ����0��ͬ�ϡ�
            bi   # ���豸ÿ����յĿ�����������Ŀ��豸��ָϵͳ�����еĴ��̺��������豸��Ĭ�Ͽ��С��1024byte
            bo   # ���豸ÿ�뷢�͵Ŀ������������ȡ�ļ���bo��Ҫ����0��bi��boһ�㶼Ҫ�ӽ�0����Ȼ����IO����Ƶ������Ҫ������
            in   # ÿ��CPU���жϴ���������ʱ���жϡ�in��cs������ֵԽ�󣬻ῴ�����ں����ĵ�cpuʱ���Խ��
            cs   # ÿ���������л��������������ǵ���ϵͳ��������Ҫ�����������л����̵߳��л���ҲҪ�����������л������ֵҪԽСԽ�ã�̫���ˣ�Ҫ���ǵ����̻߳��߽��̵���Ŀ,������apache��nginx����web�������У�����һ�������ܲ���ʱ����м�ǧ�����������򲢷��Ĳ��ԣ�ѡ��web�������Ľ��̿����ɽ��̻����̵߳ķ�ֵһֱ�µ���ѹ�⣬ֱ��cs��һ���Ƚ�С��ֵ��������̺��߳������ǱȽϺ��ʵ�ֵ�ˡ�ϵͳ����Ҳ�ǣ�ÿ�ε���ϵͳ���������ǵĴ���ͻ�����ں˿ռ䣬�����������л�������Ǻܺ���Դ��ҲҪ��������Ƶ������ϵͳ�������������л����������ʾ���CPU�󲿷��˷����������л�������CPU�������µ�ʱ�����ˣ�CPUû�г�����á�
            us   # �û�����ִ������cpuʱ��(user time)  us��ֵ�Ƚϸ�ʱ��˵���û��������ĵ�cpuʱ��࣬����������ڳ���50%��ʹ�ã���ô���Ǿ͸ÿ����Ż������㷨��������ʩ
            sy   # ϵͳCPUʱ�䣬���̫�ߣ���ʾϵͳ����ʱ�䳤��������IO����Ƶ����
            id   # ���� CPUʱ�䣬һ����˵��id + us + sy = 100,һ����Ϊid�ǿ���CPUʹ���ʣ�us���û�CPUʹ���ʣ�sy��ϵͳCPUʹ���ʡ�
            wt   # �ȴ�IOCPUʱ�䡣Wa����ʱ��˵��io�ȴ��Ƚ����أ�����������ڴ��̴������������ɵģ�Ҳ�п����Ǵ��̵Ĵ������ƿ����

            ��� r ��������4����id��������40����ʾcpu�ĸ��ɺ��ء�
            ��� pi po ���ڲ�����0����ʾ�ڴ治�㡣
            ��� b ���о�������3����ʾio���ܲ��á�
```

##    ��־����{
```shell

        history                      # ��ʱ����Ĭ��1000��
        HISTTIMEFORMAT="%Y-%m-%d %H:%M:%S "   # ��history������ʾ����ʱ��
        history  -c                  # �����¼����
        cat $HOME/.bash_history      # ��ʷ�����¼�ļ�
        lastb -a                     # �г���¼ϵͳʧ�ܵ��û������Ϣ  ��ն�������־��¼�ļ� echo > /var/log/btmp
        last                         # �鿴��½�����û���Ϣ  ��ն�������־��¼�ļ� echo > /var/log/wtmp   Ĭ�ϴ�����
        who /var/log/wtmp            # �鿴��½�����û���Ϣ
        lastlog                      # �û�����¼��ʱ��
        tail -f /var/log/messages    # ϵͳ��־
        tail -f /var/log/secure      # ssh��־

```

##    man{
```shell
        man 2 read   # �鿴read�������ĵ�
        1 ʹ������shell�п��Բ�����ָ����ִ�е�
        2 ϵͳ���Ŀɺ��еĺ����빤�ߵ�
        3 һЩ���õĺ���(function)�뺯����(library),�󲿷���C�ĺ�����(libc)
        4 װ�õ�����˵����ͨ����/dev�µĵ���
        5 �趨��������ĳЩ�����ĸ�ʽ
        6 ��Ϸgames
        7 ������Э���ȣ�����linux����ϵͳ������Э����ascll code��˵��
        8 ϵͳ����Ա���õĹ���ָ��
        9 ��kernel�йص��ļ�
```

##    selinux{
```shell

        sestatus -v                    # �鿴selinux״̬
        getenforce                     # �鿴selinuxģʽ
        setenforce 0                   # ����selinuxΪ����ģʽ(�ɱ�����ֹһЩ����)
        semanage port -l               # �鿴selinux�˿����ƹ���
        semanage port -a -t http_port_t -p tcp 8000  # ��selinux��ע��˿�����
        vi /etc/selinux/config         # selinux�����ļ�
        SELINUX=enfoceing              # �ر�selinux �����޸�Ϊ  SELINUX=disabled

```

##    �鿴ʣ���ڴ�{
```shell

        free -m
        #-/+ buffers/cache:       6458       1649
        #6458MΪ��ʵʹ���ڴ�  1649MΪ��ʵʣ���ڴ�(ʣ���ڴ�+����+������)
        #linux���������е�ʣ���ڴ���Ϊ���棬����Ҫ��֤linux�����ٶȣ�����Ҫ��֤�ڴ�Ļ����С

```

##    ϵͳ��Ϣ{
```shell

        uname -a              # �鿴Linux�ں˰汾��Ϣ
        cat /proc/version     # �鿴�ں˰汾
        cat /etc/issue        # �鿴ϵͳ�汾
        lsb_release -a        # �鿴ϵͳ�汾  �谲װ centos-release
        locale -a             # �г�������ϵ
        locale                # ��ǰ�������������б���
        hwclock               # �鿴ʱ��
        who                   # ��ǰ�����û�
        w                     # ��ǰ�����û�
        whoami                # �鿴��ǰ�û���
        logname               # �鿴��ʼ��½�û���
        uptime                # �鿴����������ʱ��
        sar -n DEV 1 10       # �鿴������������
        dmesg                 # ��ʾ������Ϣ
        lsmod                 # �鿴�ں�ģ��

```

##    Ӳ����Ϣ{
```shell

        more /proc/cpuinfo                                       # �鿴cpu��Ϣ
        lscpu                                                    # �鿴cpu��Ϣ
        cat /proc/cpuinfo | grep name | cut -f2 -d: | uniq -c    # �鿴cpu�ͺź��߼�������
        getconf LONG_BIT                                         # cpu���е�λ��
        cat /proc/cpuinfo | grep 'physical id' |sort| uniq -c    # ����cpu����
        cat /proc/cpuinfo | grep flags | grep ' lm ' | wc -l     # �������0֧��64λ
        cat /proc/cpuinfo|grep flags                             # �鿴cpu�Ƿ�֧�����⻯   pae֧�ְ����⻯  IntelVT ֧��ȫ���⻯
        more /proc/meminfo                                       # �鿴�ڴ���Ϣ
        dmidecode                                                # �鿴ȫ��Ӳ����Ϣ
        dmidecode | grep "Product Name"                          # �鿴�������ͺ�
        dmidecode | grep -P -A5 "Memory\s+Device" | grep Size | grep -v Range       # �鿴�ڴ���
        cat /proc/mdstat                                         # �鿴��raid��Ϣ
        cat /proc/scsi/scsi                                      # �鿴DellӲraid��Ϣ(IBM��HP��Ҫ�ٷ���⹤��)
        lspci                                                    # �鿴Ӳ����Ϣ
        lspci|grep RAID                                          # �鿴�Ƿ�֧��raid
        lspci -vvv |grep Ethernet                                # �鿴�����ͺ�
        lspci -vvv |grep Kernel|grep driver                      # �鿴����ģ��
        modinfo tg2                                              # �鿴�����汾(����ģ��)
        ethtool -i em1                                           # �鿴���������汾
        ethtool em1                                              # �鿴��������

```

##    �ն˿�ݼ�{
```shell

        Ctrl+A        ��    # ��ǰ
        Ctrl+E        ��    # ��β
        Ctrl+S        ��    # �ն�����
        Ctrl+Q        ����  # ������
        Ctrl+D      ����    # �˳�

```

##    ��������ģʽ{
```shell

        vi /etc/inittab
        id:3:initdefault:    # 3Ϊ���û�����
        #ca::ctrlaltdel:/sbin/shutdown -t3 -r now   # ע�ʹ��� ��ֹ ctrl+alt+del �رռ����

```

##    �ն���ʾ��ʾ{
```shell

        echo $PS1                   # ��������������ʾ��ʾ
        PS1='[\u@ \H \w \A \@#]\$'
        PS1='[\u@\h \W]\$'
        export PS1='[\[\e[32m\]\[\e[31m\]\u@\[\e[36m\]\h \w\[\e[m\]]\$ '     # ������ʾ�ն�

```

##    ��ʱ����{
```shell

        at 5pm + 3 days /bin/ls  # ���ζ�ʱ���� ָ�����������5:00ִ��/bin/ls

        crontab -e               # �༭��������
        #����  Сʱ    ��  ��  ����   �����ű�
        1,30  1-3/2    *   *   *      �����ű�  >> file.log 2>&1
        echo "40 7 * * 2 /root/sh">>/var/spool/cron/work    # ��ͨ�û���ֱ��д�붨ʱ����
        crontab -l                                          # �鿴�Զ�����������
        crontab -r                                          # ɾ���Զ�����������
        cron.deny��cron.allow                               # ��ֹ�������û�ʹ����������
        service crond start|stop|restart                    # �����Զ������Է���
        * * * * *  echo "d" >>d$(date +\%Y\%m\%d).log       # �ö�ʱ����ֱ�����ɴ����ڵ�log  ��Ҫת��%

```

##    date{
```shell

        ������[SUN] ����һ[MON] ���ڶ�[TUE] ������[WED] ������[THU] ������[FRI] ������[SAT]
        һ��[JAN] ����[FEB] ����[MAR] ����[APR] ����[MAY] ����[JUN] ����[JUL] ����[AUG] ����[SEP] ʮ��[OCT] ʮһ��[NOV] ʮ����[DEC]

        date -s 20091112                     # ������
        date -s 18:30:50                     # ��ʱ��
        date -d "7 days ago" +%Y%m%d         # 7��ǰ����
        date -d "5 minute ago" +%H:%M        # 5����ǰʱ��
        date -d "1 month ago" +%Y%m%d        # һ����ǰ
        date -d '1 days' +%Y-%m-%d           # һ���
        date -d '1 hours' +%H:%M:%S          # һСʱ��
        date +%Y-%m-%d -d '20110902'         # ���ڸ�ʽת��
        date +%Y-%m-%d_%X                    # ���ں�ʱ��
        date +%N                             # ����
        date -d "2012-08-13 14:00:23" +%s    # ����������(1970�����������)
        date -d "@1363867952" +%Y-%m-%d-%T   # ��ʱ������������
        date -d "1970-01-01 UTC 1363867952 seconds" +%Y-%m-%d-%T  # ��ʱ������������
        date -d "`awk -F. '{print $1}' /proc/uptime` second ago" +"%Y-%m-%d %H:%M:%S"    # ��ʽ��ϵͳ����ʱ��(������ǰ)

```

##    limits.conf{
```shell

        ulimit -SHn 65535  # ��ʱ�����ļ���������С ���������ļ����� ����socket���������, ��ͬ���� nofile
        ulimit -SHu 65535  # ��ʱ�����û���������
        ulimit -a          # �鿴

        /etc/security/limits.conf

        # �ļ���������С  open files
        # lsof |wc -l   �鿴��ǰ�ļ������ʹ������
        * soft nofile 16384         # ����̫�󣬽���ʹ�ù����ѻ�������
        * hard nofile 32768

        # �û���������  max user processes
        # echo $((`ps uxm |wc -l`-`ps ux |wc -l`))  �鿴��ǰ�û�ռ�õĽ����� [�����߳�]
        user soft nproc 16384
        user hard nproc 32768

        # ���/etc/security/limits.d/�������ļ������Ḳ��/etc/security/limits.conf�������
        # ��/etc/security/limits.d/�������ļ���Ͳ�Ҫ��ͬ���Ĳ�������
        /etc/security/limits.d/90-nproc.conf    # centos6.3��Ĭ������ļ��Ḳ�� limits.conf
        user soft nproc 16384
        user hard nproc 32768

        sysctl -p    # �޸������ļ�����ϵͳ��Ч

```

##    �������˿ڷ�Χ{
```shell

        # �����������˿��õ�
        echo "10000 65535" > /proc/sys/net/ipv4/ip_local_port_range

```

##    ������������{
```shell

        # �ڴ�������Ҫ�ϴ�
        vim /root/.bash_profile
        # �������2��,�˳�bash���µ�½
        # һ�����̲���ʹ�ó���NR_OPEN�ļ�������
        echo 20000500 > /proc/sys/fs/nr_open
        # ��ǰ�û�����ļ���
        ulimit -n 10000000

```

##    core�����ļ��鿴{
```shell

        gdb  core.13844
        bt   # �鿴����������Ϣ(��ջ)

```


##    libc.so�����޸�{
```shell

        # ��������glibc����libc.so���ȶ�,ͻȻ����,�Һû���δ�˳����ն�
        grep: error while loading shared libraries: /lib64/libc.so.6: ELF file OS ABI invalid

        # ������ǰϵͳ�ж��ٰ汾 libc.so
        ls /lib64/libc-[tab]

        # ���Ļ�������ָ������ libc.so �ļ�����
        export LD_PRELOAD=/lib64/libc-2.7.so    # ������ı�LD_PRELOAD����,ln������,��Ҫʹ�� /sbin/sln ����������

        # ��ǰ�����ʹ�ˣ���ִ������ǿ���滻�����ӡ��粻��ʹ�����������汾��libc.so�ļ�
        ln -f -s /lib64/libc-2.7.so /lib64/libc.so.6

```

##    �޷������ڴ� {
```shell
    
        fork: Cannot allocate memory
    
        # ����һ�����ڴ治���ã������������߳�������Ҳ�ᱨ������� �����ʵ����� kernel.pid_max ��ֵ��
        cat /proc/sys/kernel/pid_max  # Ĭ��3.2w
    
```

##    sudo{
```shell

        echo myPassword | sudo -S ls /tmp  # ֱ������sudo������ǽ���,�ӱ�׼�����ȡ����������ն��豸
        visudo                             # sudo����Ȩ�����  /etc/sudoers
        �û�  ����(����all)=NOPASSWD:����1,����2
        user  ALL=NOPASSWD:/bin/su         # ��root�����л�root���
        wangming linuxfan=NOPASSWD:/sbin/apache start,/sbin/apache restart
        UserName ALL=(ALL) ALL
        UserName ALL=(ALL) NOPASSWD: ALL
        peterli        ALL=(ALL)       NOPASSWD:/sbin/service
        Defaults requiretty                # sudo�������̨����,ע�ʹ��м�����
        Defaults !visiblepw                # sudo������Զ��,ȥ��!������

```

##    grub�������������{
```shell

        vim /etc/grub.conf
        title ms-dos
        rootnoverify (hd0,0)
        chainloader +1

```

##    stty{
```shell

        #sttyʱһ�������ı䲢��ӡ�ն������õĳ�������

        stty iuclc          # ���������½�ֹ�����д
        stty -iuclc         # �ָ������д
        stty olcuc          # ���������½�ֹ���Сд
        stty -olcuc         # �ָ����Сд
        stty size           # ��ӡ���ն˵�����������
        stty eof "string"   # �ı�ϵͳĬ��ctrl+D����ʾ�ļ��Ľ���
        stty -echo          # ��ֹ����
        stty echo           # �򿪻���
        stty -echo;read;stty echo;read  # ���Խ�ֹ����
        stty igncr          # ���Իس���
        stty -igncr         # �ָ��س���
        stty erase '#'      # ��#����Ϊ�˸��ַ�
        stty erase '^?'     # �ָ��˸��ַ�
```

##        ��ʱ����{
```shell
            timeout_read(){

                timeout=$1
                old_stty_settings=`stty -g`����# save current settings
                stty -icanon min 0 time 100����# set 10seconds,not 100seconds
                eval read varname����          # =read $varname
                stty "$old_stty_settings"����  # recover settings
        }
            read -t 10 varname    # ���򵥵ķ�����������read�����-tѡ��

```

##        ����û�����{
```shell

            #!/bin/bash
            old_tty_settings=$(stty -g)   # �����ϵ�����(Ϊʲô?).
            stty -icanon
            Keypress=$(head -c1)          # ����ʹ��$(dd bs=1 count=1 2> /dev/null)
            echo "Key pressed was \""$Keypress"\"."
            stty "$old_tty_settings"      # �ָ��ϵ�����.
            exit 0

    ```

##    iptables{
```shell

        �ڽ�������nat mangle �� filter
        filterԤ��������INPUT��FORWARD �� OUTPUT ����������
        vi /etc/sysconfig/iptables    # �����ļ�
        INPUT    # ����
        FORWARD  # ת��
        OUTPUT   # ��ȥ
        ACCEPT   # ���������
        REJECT   # ����÷��
        DROP     # ����������账��
        -A       # ����ѡ�����(INPUT��)ĩ���һ����������
        -D       # ɾ��һ��
        -E       # �޸�
        -p       # tcp��udp��icmp    0�൱������all    !ȡ��
        -P       # ����ȱʡ����(������������ƥ��ǿ��ʹ�ô˲���)
        -s       # IP/����    (IP/24)    ���������������������IP��ַ !ȡ��
        -j       # Ŀ����ת�����������������˵�ר���ڽ�Ŀ��
        -i       # ����ģ����磩�ӿ� [����] eth0
        -o       # ����ӿ�[����]
        -m       # ģ��
        --sport  # Դ�˿�
        --dport  # Ŀ��˿�

        iptables -F                        # ������ǽ�еĹ�����Ŀ�����  # ע��: iptables -P INPUT ACCEPT
        iptables-restore < �����ļ�        # �������ǽ����
        /etc/init.d/iptables save          # �������ǽ����
        /etc/init.d/iptables restart       # ��������ǽ����
        iptables -L -n                     # �鿴����
        iptables -t nat -nL                # �鿴ת��
```

##        iptablesʵ��{
```shell

            iptables -L INPUT                   # �г�ĳ�������е����й���
            iptables -X allowed                 # ɾ��ĳ�������� ,���ӹ�������������з��ڽ���
            iptables -Z INPUT                   # ���������������
            iptables -N allowed                 # �����µĹ�����
            iptables -P INPUT DROP              # �����������
            iptables -A INPUT -s 192.168.1.1    # �ȶԷ������ԴIP   # ! 192.168.0.0/24  ! ����Ա�
            iptables -A INPUT -d 192.168.1.1    # �ȶԷ����Ŀ�ĵ�IP
            iptables -A INPUT -i eth0           # �ȶԷ���Ǵ���Ƭ��������
            iptables -A FORWARD -o eth0         # �ȶԷ��Ҫ����Ƭ�����ͳ� eth+��ʾ���е�����
            iptables -A INPUT -p tcp            # -p ! tcp �ų�tcp�����udp��icmp��-p all��������
            iptables -D INPUT 8                 # ��ĳ����������ɾ��һ������
            iptables -D INPUT --dport 80 -j DROP         # ��ĳ����������ɾ��һ������
            iptables -R INPUT 8 -s 192.168.0.1 -j DROP   # ȡ�����й���
            iptables -I INPUT 8 --dport 80 -j ACCEPT     # ����һ������
            iptables -A INPUT -i eth0 -j DROP            # �������������
            iptables -A INPUT -p tcp -s IP -j DROP       # ��ָֹ��IP����
            iptables -A INPUT -p tcp -s IP --dport port -j DROP               # ��ָֹ��IP���ʶ˿�
            iptables -A INPUT -s IP -p tcp --dport port -j ACCEPT             # ������IP����ָ���˿�
            iptables -A INPUT -p tcp --dport 22 -j DROP                       # ��ֹʹ��ĳ�˿�
            iptables -A INPUT -i eth0 -p icmp -m icmp --icmp-type 8 -j DROP   # ��ֹicmp�˿�
            iptables -A INPUT -i eth0 -p icmp -j DROP                         # ��ֹicmp�˿�
            iptables -t filter -A INPUT -i eth0 -p tcp --syn -j DROP                  # ��ֹ����û�о�����ϵͳ��Ȩ��TCP����
            iptables -A INPUT -f -m limit --limit 100/s --limit-burst 100 -j ACCEPT   # IP����������
            iptables -A INPUT -i eth0 -s 192.168.62.1/32 -p icmp -m icmp --icmp-type 8 -j ACCEPT  # ��192.168.62.1�⣬��ֹ������ping�ҵ�����
            iptables -A INPUT -p tcp -m tcp --dport 80 -m state --state NEW -m recent --update --seconds 5 --hitcount 20 --rttl --name WEB --rsource -j DROP  # �ɷ���cc����(δ����)

```

##        iptables����ʵ���ļ�{
```shell

            # Generated by iptables-save v1.2.11 on Fri Feb  9 12:10:37 2007
            *filter
            :INPUT ACCEPT [637:58967]
            :FORWARD DROP [0:0]
            :OUTPUT ACCEPT [5091:1301533]
            # �����IP��IP�η��� ������
            -A INPUT -s 127.0.0.1 -p tcp -j ACCEPT
            -A INPUT -s 192.168.0.0/255.255.0.0 -p tcp -j ACCEPT
            # ���Ŷ��⿪�Ŷ˿�
            -A INPUT -p tcp --dport 80 -j ACCEPT
            # ָ��ĳ�˿����IP����
            -A INPUT -s 192.168.10.37 -p tcp --dport 22 -j ACCEPT
            # �ܾ�����Э��(INPUT����)
            -A INPUT -p tcp -m tcp --tcp-flags FIN,SYN,RST,PSH,URG RST -j DROP
            # �����ѽ����Ļ��������ͨ��
            -A INPUT -m state --state ESTABLISHED,RELATED -j ACCEPT
            # �ܾ�ping
            -A INPUT -p tcp -m tcp -j REJECT --reject-with icmp-port-unreachable
            COMMIT
            # Completed on Fri Feb  9 12:10:37 2007

    ```

##        iptables����ʵ��{
```shell

            # ����ĳ��IP�����κζ˿�
            iptables -A INPUT -s 192.168.0.3/24 -p tcp -j ACCEPT
            # �趨Ԥ����� (�ܾ����е����ݰ�����������Ҫ��,��ֻ��WEB������.�����Ƽ�����������DROP)
            iptables -P INPUT DROP
            iptables -P FORWARD DROP
            iptables -P OUTPUT ACCEPT
            # ע��: ֱ�����������������
            # ����22�˿�
            iptables -A INPUT -p tcp --dport 22 -j ACCEPT
            # ���OUTPUT ���ó�DROP�ģ�Ҫд������һ��
            iptables -A OUTPUT -p tcp --sport 22 -j ACCEPT
            # ע:��д�����޷�SSH.�����Ķ˿�һ��,OUTPUT���ó�DROP�Ļ�,ҲҪ���һ����
            # ���������web������,OUTPUT���ó�DROP�Ļ�,ͬ��ҲҪ���һ����
            iptables -A OUTPUT -p tcp --sport 80 -j ACCEPT
            # ��WEB������,����80�˿� ,����ͬ��
            iptables -A INPUT -p tcp --dport 80 -j ACCEPT
            # ���ʼ�������,����25,110�˿�
            iptables -A INPUT -p tcp --dport 110 -j ACCEPT
            iptables -A INPUT -p tcp --dport 25 -j ACCEPT
            # ����icmp��ͨ��,����ping
            iptables -A OUTPUT -p icmp -j ACCEPT (OUTPUT���ó�DROP�Ļ�)
            iptables -A INPUT -p icmp -j ACCEPT  (INPUT���ó�DROP�Ļ�)
            # ����loopback!(��Ȼ�ᵼ��DNS�޷������رյ�����)
            IPTABLES -A INPUT -i lo -p all -j ACCEPT (�����INPUT DROP)
            IPTABLES -A OUTPUT -o lo -p all -j ACCEPT(�����OUTPUT DROP)

    ```

##        centos6��iptables��������{
```shell
            *filter
            :INPUT ACCEPT [0:0]
            :FORWARD ACCEPT [0:0]
            :OUTPUT ACCEPT [0:0]
            -A INPUT -m state --state ESTABLISHED,RELATED -j ACCEPT
            -A INPUT -p icmp -j ACCEPT
            -A INPUT -i lo -j ACCEPT
            -A INPUT -s 222.186.135.61 -p tcp -j ACCEPT
            -A INPUT -p tcp  --dport 80 -j ACCEPT
            -A INPUT -m state --state NEW -m tcp -p tcp --dport 22 -j ACCEPT
            -A INPUT -j REJECT --reject-with icmp-host-prohibited
            -A INPUT -p tcp -m tcp --tcp-flags FIN,SYN,RST,PSH,URG RST -j DROP
            -A FORWARD -j REJECT --reject-with icmp-host-prohibited
            COMMIT
    ```

##        �������ת��{
```shell

            # ����ͨ��vpn����
            echo 1 > /proc/sys/net/ipv4/ip_forward       # ���ں����ipת������
            iptables -t nat -A POSTROUTING -s 10.8.0.0/24 -j MASQUERADE  # �������ת��
            iptables -t nat -A POSTROUTING -s 10.0.0.0/255.0.0.0 -o eth0 -j SNAT --to 192.168.10.158  # ԭIP���ξ����ĸ�����IP��ȥ
            iptables -t nat -nL                # �鿴ת��

    ```

##        �˿�ӳ��{
```shell

            # ����ͨ��������IP�Ļ���ӳ��˿�
            # �����������·��
            route add -net 10.10.20.0 netmask 255.255.255.0 gw 10.10.20.111     # ������Ҫ���Ĭ�����أ��������ؿ���ת��
            # ��������
            echo 1 > /proc/sys/net/ipv4/ip_forward       # ���ں����ipת������
            iptables -t nat -A PREROUTING -d ����IP  -p tcp --dport 9999 -j DNAT --to 10.10.20.55:22    # ����
            iptables -t nat -A POSTROUTING -s 10.10.20.0/24 -j SNAT --to ����IP                         # ת����ȥ
            iptables -t nat -nL                # �鿴ת��

    ```

}

#4 ����{
```shell
    /etc/init.d/sendmail start                   # ��������
    /etc/init.d/sendmail stop                    # �رշ���
    /etc/init.d/sendmail status                  # �鿴����ǰ״̬
    /date/mysql/bin/mysqld_safe --user=mysql &   # ����mysql��̨����
    /bin/systemctl restart  mysqld.service       # centos7��������
    vi /etc/rc.d/rc.local                        # ��������ִ��  �����ڿ��������ű�
    /etc/rc.d/rc3.d/S55sshd                      # ���������͹ػ��رշ�������    # S����start  K�ػ�stop  55���� ���������
    ln -s -f /date/httpd/bin/apachectl /etc/rc.d/rc3.d/S15httpd   # ����������ű����ӵ���������Ŀ¼
    ipvsadm -ln                                  # lvs�鿴��˸��ػ�����
    ipvsadm -C                                   # lvs�������
    xm list                                      # �鿴xen���������б�
    virsh                                        # ���⻯(xen\kvm)������  yum groupinstall Virtual*
    ./bin/httpd -M                               # �鿴httpd����ģ��
    httpd -t -D DUMP_MODULES                     # rpm��httpd�鿴����ģ��
    echo ����| /bin/mail -s "����" �ռ��� -f ������       # �����ʼ�
    "`echo "����"|iconv -f utf8 -t gbk`" | /bin/mail -s "`echo "����"|iconv -f utf8 -t gbk`" �ռ���     # ����ʼ�����
    /usr/local/nagios/bin/nagios -v /usr/local/nagios/etc/nagios.cfg   # ���nagios�����ļ�
```
##    chkconfig{
```shell

        chkconfig service on|off|set             # ���÷Ƕ���������״̬
        chkconfig --level 35   httpd   off       # �÷����Զ�����
        chkconfig --level 35   httpd   on        # �÷����Զ����� 35ָ�������м���
        chkconfig --list                         # �鿴���з��������״̬
        chkconfig --list |grep httpd             # �鿴ĳ�����������״̬
        chkconfig �C-list [service]               # �鿴�����״̬

```

##    systemctl{
```shell

        systemctl is-active *.service      # �鿴�����Ƿ�����
        systemctl is-enabled *.service     # ��ѯ�����Ƿ񿪻�����
        systemctl mask *.service           # ע��ָ������
        systemctl unmask cups.service      # ȡ��ע��cups����
        systemctl enable *.service         # �������з���
        systemctl disable *.service        # ȡ����������
        systemctl start *.service          # ��������
        systemctl stop *.service           # ֹͣ����
        systemctl restart *.service        # ��������
        systemctl reload *.service         # ���¼��ط��������ļ�
        systemctl status *.service         # ��ѯ��������״̬
        systemctl --failed                 # ��ʾ����ʧ�ܵķ���
        systemctl poweroff                 # ϵͳ�ػ�
        systemctl reboot                   # ��������
        systemctl rescue                   # ǿ�ƽ����Ԯģʽ
        systemctl emergency                # ǿ�ƽ��������Ԯģʽ
        systemctl list-dependencies        # �鿴��ǰ���м���target(mult-user)��������Щ����
        systemctl list-unit-files          # �鿴����������״̬
        journalctl -r -u elasticsearch.service  # �鿴��־ r���� u������
        /etc/systemd/system/falcon-agent.service
            [Unit]
            Description=This is zuiyou monitor agent
            After=network.target remote-fs.target nss-lookup.target

            [Service]
            User= root
            Type=simple
            PIDFile=/opt/falcon-agent/var/app.pid
            ExecStartPre=/usr/bin/rm -f /opt/falcon-agent/var/app.pid
            ExecStart=/opt/falcon-agent/control start
            ExecReload=/bin/kill -s HUP $MAINPID
            KillMode=process
            KillSignal=SIGQUIT
            TimeoutStopSec=5
            PrivateTmp=true
            Restart=always
            LimitNOFILE=infinity

            [Install]
            WantedBy=multi-user.target

        systemctl daemon-reload           # ��������

```


##    nginx{
```shell

        yum install -y make gcc  openssl-devel pcre-devel  bzip2-devel libxml2 libxml2-devel curl-devel libmcrypt-devel libjpeg libjpeg-devel libpng libpng-devel openssl

        groupadd nginx
        useradd nginx -g nginx -M -s /sbin/nologin

        mkdir -p /opt/nginx-tmp

        wget http://labs.frickle.com/files/ngx_cache_purge-1.6.tar.gz
        tar fxz ngx_cache_purge-1.6.tar.gz
        # ngx_cache_purge ���ָ��url����
        # ����һ��URLΪ http://192.168.12.133/test.txt
        # ͨ������      http://192.168.12.133/purge/test.txt  �Ϳ��������URL�Ļ��档

        tar zxvpf nginx-1.4.4.tar.gz
        cd nginx-1.4.4

        # ./configure --help
        # --with                 # Ĭ�ϲ����� ��ָ������˲�����ʹ��
        # --without              # Ĭ�ϼ��أ����ô˲�������
        # --add-module=path      # ���ģ���·��
        # --add-module=/opt/ngx_module_upstream_check \         # nginx ����״̬ҳ��
        # ngx_module_upstream_check  ����ǰ��Ҫ���Ӧ�汾���� patch -p1 < /opt/nginx_upstream_check_module/check_1.2.6+.patch
        # --add-module=/opt/ngx_module_memc \                   # ������ҳ�����ݴ���� memcached��
        # --add-module=/opt/ngx_module_lua \                    # ֧��lua�ű� yum install lua-devel lua

        ./configure \
        --user=nginx \
        --group=nginx \
        --prefix=/usr/local/nginx \
        --with-http_ssl_module \
        --with-http_realip_module \
        --with-http_gzip_static_module \
        --with-http_stub_status_module \
        --add-module=/opt/ngx_cache_purge-1.6 \
        --http-client-body-temp-path=/opt/nginx-tmp/client \
        --http-proxy-temp-path=/opt/nginx-tmp/proxy \
        --http-fastcgi-temp-path=/opt/nginx-tmp/fastcgi \
        --http-uwsgi-temp-path=/opt/nginx-tmp/uwsgi \
        --http-scgi-temp-path=/opt/nginx-tmp/scgi

        make && make install

        /usr/local/nginx/sbin/nginx �Ct             # ���Nginx�����ļ� ������ִ��
        /usr/local/nginx/sbin/nginx -t -c /opt/nginx/conf/nginx.conf  # ���Nginx�����ļ�
        /usr/local/nginx/sbin/nginx                # ����nginx
        /usr/local/nginx/sbin/nginx -s reload      # ��������
        /usr/local/nginx/sbin/nginx -s stop        # �ر�nginx����

```

##    elasticsearch{
```shell

        vim /etc/sysctl.conf
        vm.max_map_count = 262144

        vim /etc/security/limits.conf
        * soft memlock unlimited
        * hard memlock unlimited
        sysctl -p

        curl 'localhost:9200/_cat/health?v'                    # �������
        curl 'localhost:9200/_cat/nodes?v'                     # ��ȡ��Ⱥ�Ľڵ��б�
        curl 'localhost:9200/_cat/indices?v'                   # �г���������
        curl 127.0.0.1:9200/indexname -XDELETE                 # ɾ������
        curl -XGET http://localhost:9200/_cat/shards           # �鿴��Ƭ
        curl '127.0.0.1:9200/_cat/indices'                     # ���Ƭͬ��  unassigned_shards  # ûͬ�����

```


##    mysql��������{
```shell

        # mysql ���ӻ����� MySQL Workbench

        mysqlcheck -uroot -p -S mysql.sock --optimize --databases account       # ��顢�޸����Ż�MyISAM��
        mysqlbinlog slave-relay-bin.000001              # �鿴��������־
        mysqladmin -h myhost -u root -p create dbname   # �������ݿ�

        flush privileges;             # ˢ��
        show databases;               # ��ʾ�������ݿ�
        use dbname;                   # �����ݿ�
        show tables;                  # ��ʾѡ�����ݿ������еı�
        desc tables;                  # �鿴��ṹ
        drop database name;           # ɾ�����ݿ�
        drop table name;              # ɾ����
        create database name;         # �������ݿ�
        select column from table;     # ��ѯ
        show processlist;             # �鿴mysql����
        show full processlist;        # ��ʾ����ȫ�����
        select user();                # �鿴�����û�
        show slave status\G;          # �鿴����״̬
        show variables;               # �鿴���в�������
        show status;                  # ����״̬
        show table status             # �鿴�������״̬
        show grants for user@'%'                                    # �鿴�û�Ȩ��
        drop table if exists user                                   # ����ھ�ɾ��
        create table if not exists user                             # �����ھʹ���
        select host,user,password from user;                        # ��ѯ�û�Ȩ�� ��use mysql
        create table ka(ka_id varchar(6),qianshu int);              # ������
        show variables like 'character_set_%';                      # �鿴ϵͳ���ַ���������ʽ���趨
        show variables like '%timeout%';                            # �鿴��ʱ��ز���
        delete from user where user='';                             # ɾ�����û�
        delete from user where user='sss' and host='localhost' ;    # ɾ���û�
        drop user 'sss'@'localhost';                                # ʹ�ô˷���ɾ���û���Ϊ����
        ALTER TABLE mytable ENGINE = MyISAM ;                       # �ı����еı�ʹ�õĴ洢����
        SHOW TABLE STATUS from  dbname  where Name='tablename';     # ��ѯ������
        mysql -uroot -p -A -ss -h10.10.10.5 -e "show databases;"    # shell�л�ȡ���ݲ������ -ss����
        CREATE TABLE innodb (id int, title char(20)) ENGINE = INNODB                     # ������ָ���洢���������(MyISAM��INNODB)
        grant replication slave on *.* to 'user'@'%' identified by 'pwd';                # �������Ӹ����û�
        ALTER TABLE player ADD INDEX weekcredit_faction_index (weekcredit, faction);     # �������
        alter table name add column accountid(column)  int(11) NOT NULL(column);         # �����ֶ�
        update host set monitor_state='Y',hostname='xuesong' where ip='192.168.1.1';     # ��������
        select * from information_schema.processlist where command!='sleep';             # �鿴��ǰ����
        select * from atable where name='on' AND t<15 AND host LIKE '10%' limit 1,10;    # ��������ѯ
        show create database ops_deploy;                                                 # �鿴���ݿ����
        show create table updatelog;                                                     # �鿴���ݿ�����
        alter database ops_deploy CHARACTER SET utf8;                                    # �޸����ݿ����
        alter table `updatelog` default character set utf8;                              # �޸ı����
        alter table `updatelog` convert to character set utf8;                           # �޸�һ�ű�������ֶεı����ʽ
```
##        ������{
```shell

            create table xuesong  (id INTEGER  PRIMARY KEY AUTO_INCREMENT, name CHAR(30) NOT NULL, age integer , sex CHAR(15) );  # ����������
            insert into xuesong(name,age,sex) values(%s,%s,%s)  # ������������

```

##        ��¼mysql������{
```shell

            # ��ʽ�� mysql -h ������ַ -u �û��� -p �û�����
            mysql -h110.110.110.110 -P3306 -uroot -p
            mysql -uroot -p -S /data1/mysql5/data/mysql.sock -A  --default-character-set=GBK

    ```

##        shellִ��mysql����{
```shell

            mysql -u root -p'123' xuesong < file.sql   # ���ָ����ִ��sql�ļ��е����,�ô�����Ҫת���������,һ�������Ի���.��ָ����ִ��ʱ�������Ҫ��use
            mysql -u$username -p$passwd -h$dbhost -P$dbport -A -e "
            use $dbname;
            delete from data where date=('$date1');
            "    # ִ�ж���mysql����
            mysql -uroot -p -S mysql.sock -e "use db;alter table gift add column accountid  int(11) NOT NULL;flush privileges;"  2>&1 |grep -v Warning    # ����½mysql�����ֶ�

    ```


##        mysql�ַ������{
```shell

            show variables like '%character%';      # �鿴���ݿ��������ַ����Ĳ���
            # character_set_client��character_set_connection �Լ� character_set_results �⼸���������ǿͻ��˵�����
            # character_set_system��character_set_server �Լ� character_set_database ��ָ�������˵����á�
            # �������������������˵Ĳ�����˵�����ȼ���:
            # �м��ַ��� > ���ַ��� > character_set_database > character_set_server > character_set_system

            show global variables like '%char%';                                 #�鿴RDSʵ���ַ�����ز�������
            show global variables like 'coll%';                                  #�鿴��ǰ�Ự�ַ�����ز�������
            show character set;                                                  #�鿴ʵ��֧�ֵ��ַ���
            show collation;                                                      #�鿴ʵ��֧�ֵ��ַ���
            show create table table_name \G                                      #�鿴���ַ�������
            show create database database_name \G                                #�鿴���ݿ��ַ�������
            show create procedure procedure_name \G                              #�鿴�洢�����ַ�������
            show procedure status \G                                             #�鿴�洢�����ַ�������
            alter database db_name default charset utf8;                         #�޸����ݿ���ַ��� 
            create database db_name character set utf8;                          #�������ݿ�ʱָ���ַ���
            alter table tab_name default charset utf8 collate utf8_general_ci;   #�޸ı��ַ������ַ���

            # ��������sql �ֱ𽫿� dbsdq , �� tt2 , �� tt2 �е� c2 ���޸�Ϊutf8mb4 �ַ���
            alter database dbsdq character set utf8mb4 collate utf8mb4_unicode_ci;
            use dbsdq;
            alter table tt2 character set utf8mb4 collate utf8mb4_unicode_ci;
            alter table tt2 modify c2  varchar(10) character set utf8mb4;
            # �޸���ʱ,��ǰ���е������ж�������ת��Ϊ�µ��ַ���;
            # alter table ��Ա��Ԫ������

    ```

##        �������ݿ�{
```shell

            mysqldump -h host -u root -p --default-character-set=utf8 dbname >dbname_backup.sql               # ��������������ԭ���ȴ����⣬��use
            mysqldump -h host -u root -p --database --default-character-set=utf8 dbname >dbname_backup.sql    # ������������ԭ����Ҫ������
            /bin/mysqlhotcopy -u root -p    # mysqlhotcopyֻ�ܱ���MyISAM����
            mysqldump -u root -p -S mysql.sock --default-character-set=utf8 dbname table1 table2  > /data/db.sql    # ���ݱ�
            mysqldump -uroot -p123  -d database > database.sql    # �������ݿ�ṹ

            # ��СȨ�ޱ���
            grant select on db_name.* to dbbackup@"localhost" Identified by "passwd";
            # --single-transaction  InnoDB��ʱ��� ֻ���ݿ�ʼ��һ�̵�����,���ݹ����е����ݲ��ᱸ��
            mysqldump -hlocalhost -P 3306 -u dbbackup --single-transaction  -p"passwd" --database dbname >dbname.sql

            # xtrabackup�����赥����װ��� �ŵ�: �ٶȿ�,ѹ��С,��ֱ�ӻָ����Ӹ���
            innobackupex --user=root --password="" --defaults-file=/data/mysql5/data/my_3306.cnf --socket=/data/mysql5/data/mysql.sock --slave-info --stream=tar --tmpdir=/data/dbbackup/temp /data/dbbackup/ 2>/data/dbbackup/dbbackup.log | gzip 1>/data/dbbackup/db50.tar.gz

    ```

##        ��ԭ���ݿ�{
```shell

            mysql -h host -u root -p dbname < dbname_backup.sql
            source ·��.sql   # ��½mysql��ԭsql�ļ�

    ```

##        ��Ȩ��{
```shell

            # ָ��IP: $IP  ����: localhost   ����IP��ַ: %   # ͨ��ָ������
            grant all on zabbix.* to user@"$IP";             # �������˺Ÿ���Ȩ��
            grant select on database.* to user@"%" Identified by "passwd";     # �����ѯȨ��(û���û���ֱ�Ӵ���)
            grant all privileges on database.* to user@"$IP" identified by 'passwd';         # ����ָ��IPָ���û�����Ȩ��(������Ե�ǰ��������û���Ȩ��)
            grant all privileges on database.* to user@"localhost" identified by 'passwd' with grant option;   # ���豾��ָ���û�����Ȩ��(����Ե�ǰ��������û���Ȩ��)
            grant select, insert, update, delete on database.* to user@'ip'identified by "passwd";   # ���Ź������ָ��
            revoke all on *.* from user@localhost;     # ����Ȩ��
            GRANT SELECT, INSERT, UPDATE, DELETE, CREATE, DROP, INDEX, ALTER, EXECUTE, CREATE ROUTINE, ALTER ROUTINE ON `storemisc_dev`.* TO 'user'@'192.168.%'

    ```

##        ��������{
```shell

            update user set password=password('passwd') where user='root'
            mysqladmin -u root password 'xuesong'

    ```

##        mysql�������������{
```shell

            cd /data/mysql5
            /data/mysql5/bin/mysqld_safe --user=mysql --skip-grant-tables --skip-networking &
            use mysql;
            update user set password=password('123123') where user='root';

    ```

##        mysql���Ӹ���ʧ�ָܻ�{
```shell

            slave stop;
            reset slave;
            change master to master_host='10.10.10.110',master_port=3306,master_user='repl',master_password='repl',master_log_file='master-bin.000010',master_log_pos=107,master_connect_retry=60;
            slave start;

    ```

##        sql���ʹ�ñ���{
```shell

            use xuesong;
            set @a=concat('my',weekday(curdate()));    # ���ʱ�����
            set @sql := concat('CREATE TABLE IF NOT EXISTS ',@a,'( id INT(11) NOT NULL )');   # ���sql���
            select @sql;                    # �鿴���
            prepare create_tb from @sql;    # ׼��
            execute create_tb;              # ִ��

    ```

##        ���mysql���Ӹ����ӳ�{
```shell

            1���ڴӿⶨʱִ�и��������е�һ��timeout��ֵ
            2��ͬʱȡ���ӿ��е�timeoutֵ�Ա��жϴӿ���������ӳ�

    ```

##        ����{
```shell

            show OPEN TABLES where In_use > 0;                  # �鿴��ǰ����Ϣ
            show variables like 'innodb_print_all_deadlocks';   # �鿴��ǰ��������
            set global innodb_print_all_deadlocks = 1;          # ����������Ϣ���浽������־
            innodb_print_all_deadlocks = 1                      # conf����

    ```

##        mysql����ѯ{
```shell

            select * from information_schema.processlist where command in ('Query') and time >5\G      # ��ѯ��������5S�Ľ���
```
##            ��������ѯ��־{
```shell

                # �����ļ� /etc/my.conf
                [mysqld]
                log-slow-queries=/var/lib/mysql/slowquery.log         # ָ����־�ļ����λ�ã�����Ϊ�գ�ϵͳ���һ��ȱʡ���ļ�host_name-slow.log
                long_query_time=5                                     # ��¼������ʱ�䣬Ĭ��Ϊ10s ����0.5S
                log-queries-not-using-indexes                         # log����û��ʹ��������query,���Ը�����������Ƿ���  �ɲ���
                log-long-format                                       # ��������ˣ�����û��ʹ�������Ĳ�ѯҲ������¼    �ɲ���
                # ֱ���޸���Ч
                show variables like "%slow%";                         # �鿴����ѯ״̬
                set global slow_query_log='ON';                       # ��������ѯ��־ �������ܲ�ͬ�����Ͼ��ѯ�����ı���

        ```

##            mysqldumpslow����ѯ��־�鿴{
```shell

                -s  # ��order��˳�򣬰������˴��룬��Ҫ�� c,t,l,r��ac,at,al,ar���ֱ��ǰ���query������ʱ�䣬lock��ʱ��ͷ��صļ�¼��������ǰ�����a��ʱ����
                -t  # ��top n����˼����Ϊ����ǰ�������������
                -g  # ��߿���дһ������ƥ��ģʽ����Сд�����е�

                mysqldumpslow -s c -t 20 host-slow.log                # ���ʴ�������20��sql���
                mysqldumpslow -s r -t 20 host-slow.log                # ���ؼ�¼������20��sql
                mysqldumpslow -t 10 -s t -g "left join" host-slow.log # ����ʱ�䷵��ǰ10�����溬�������ӵ�sql���

                show global status like '%slow%';                     # �鿴�������session�ж��ٸ�����ѯ
                show variables like '%slow%';                         # �鿴����ѯ��־�Ƿ��������slow_query_log��log_slow_queries��ʾΪon��˵��������������ѯ��־�Ѿ�����
                show variables like '%long%';                         # �鿴��ʱ��ֵ
                desc select * from wei where text='xishizhaohua'\G;   # ɨ�����ű� tepe:ALL  û��ʹ������ key:NULL
                create index text_index on wei(text);                 # ��������

            Percona Toolkit ����־��������

```

##        mysql����������ѯ{
```shell

            select * from information_schema.global_status;

            com_select
            com_delete
            com_insert
            com_update

    ```

##    mongodb{

        # mongo���ӹ����� studio 3t  

##        һ������{
```shell

            # ��������֤
            ./mongod --port 27017 --fork --logpath=/opt/mongodb/mongodb.log --logappend --dbpath=/opt/mongodb/data/
            # ������֤
            ./mongod --port 27017 --fork --logpath=/opt/mongodb/mongodb.log --logappend --dbpath=/opt/mongodb/data/ --auth

            # �����ļ���ʽ����
            cat /opt/mongodb/mongodb.conf
              port=27017                       # �˿ں�
              fork=true                        # ���ػ����̵ķ�ʽ���У���������������
              auth=true                        # �����û���֤
              logappend=true                   # ��־����׷�ӷ�ʽ
              logpath=/opt/mongodb/mongodb.log # ��־����ļ�·��
              dbpath=/opt/mongodb/data/        # ���ݿ�·��
              shardsvr=true                    # �����Ƿ��Ƭ
              maxConns=600                     # ���ݿ�����������
            ./mongod -f /opt/mongodb/mongodb.conf

            # ��������
            bind_ip         # ��IP  ʹ��mongo��¼��Ҫָ����ӦIP
            journal         # ������־����,���͵������ϵĻָ�ʱ��,ȡ��dur����
            syncdelay       # ϵͳͬ��ˢ�´��̵�ʱ��,Ĭ��60��
            directoryperdb  # ÿ��db�������Ŀ¼,��������.��mysql������ռ�����
            repairpath      # ִ��repairʱ����ʱĿ¼.���û����journal,�����쳣����,����ִ��repair����
            # mongodbû�в��������ڴ��С.ʹ��os mmap���ƻ��������ļ�,���������������ڴ�������,Ч�ʷǳ���.����������ϵͳ�����ڴ��Ӱ��д������

    ```

##        �����ر�{
```shell

            # ����һ:��¼mongodb
            ./mongo
            use admin
            db.shutdownServer()

            # ����:kill�����ź�  ���ֽԿ�
            kill -2 pid
            kill -15 pid

    ```

##        ����������֤���û�����{
```shell

            ./mongo                      # �ȵ�¼
            use admin                    # �л���admin��
            db.addUser("root","123456")                     # �����û�
            db.addUser('zhansan','pass',true)               # ����û���readOnlyΪtrue��ô����û�ֻ�ܶ�ȡ���ݣ����һ��readOnly�û�zhansan
            ./mongo 127.0.0.1:27017/mydb -uroot -p123456    # �ٴε�¼,ֻ������û����ڿ��¼
            #��Ȼ�ǳ�������Ա������admin����ֱ�ӵ�¼�������ݿ⣬���򱨴�
            #Fri Nov 22 15:03:21.886 Error: 18 { code: 18, ok: 0.0, errmsg: "auth fails" } at src/mongo/shell/db.js:228
            show collections                                # �鿴����״̬ �ٴε�¼ʹ����������,��ʾ����δ����Ȩ
            db.system.users.find();                         # �鿴�����û���Ϣ
            db.system.users.remove({user:"zhansan"})        # ɾ���û�

            #�ָ�����ֻ��Ҫ����mongodb ����--auth����

    ```

##        �ġ���¼{
```shell

            192.168.1.5:28017      # http��¼��ɲ鿴״̬
            mongo                  # Ĭ�ϵ�¼��� test ��
            mongo 192.168.1.5:27017/databaseName      # ֱ������ĳ���� �������򴴽�  ������֤��Ҫָ����Ӧ��ſɵ�¼

    ```

##        �塢�鿴״̬{
```shell

            #��¼��ִ������鿴״̬
            db.runCommand({"serverStatus":1})
                globalLock         # ��ʾȫ��д����ռ���˷���������ʱ��(΢��)
                mem                # �����������ڴ�ӳ���˶�������,���������̵������ڴ�ͳ�פ�ڴ��ռ�����(MB)
                indexCounters      # ��ʾB���ڴ��̼���(misses)���ڴ����(hits)�Ĵ���.�����������ֵ��ʼ����,��Ҫ��������ڴ���
                backgroudFlushing  # ��ʾ��̨���˶��ٴ�fsync�Լ����˶���ʱ��
                opcounters         # ����ÿ����Ҫ��ײ�Ĵ���
                asserts            # ͳ���˶��ԵĴ���

            #״̬��Ϣ�ӷ�����������ʼ����,�������ͻḴλ,���͸�λ�����м������Ḵλ,asserts�е�rooloversֵ����

            #mongodb�Դ�������
            ./mongostat
                insert     #ÿ�������
                query      #ÿ���ѯ��
                update     #ÿ�������
                delete     #ÿ��ɾ����
                locked     #������
                qr|qw      #�ͻ��˲�ѯ�Ŷӳ���(��|д)
                ar|aw      #��Ծ�ͻ�����(��|д)
                conn       #������
                time       #��ǰʱ��

            mongostat -h 127.0.0.1 --port 27047 --authenticationDatabase admin -u zadmin -p Keaphh9e    # �鿴mongo״̬
            mongotop  -h 127.0.0.1 --port 27047 --authenticationDatabase admin -u zadmin -p Keaphh9e    # �鿴mongo���ϵ�ͳ������

    ```

##        ������������{
```shell

            db.listCommands()     # ��ǰMongoDB֧�ֵ��������ͬ����ͨ����������db.runCommand({"listCommands" : `1})����ѯ�������

            db.runCommand({"buildInfo" : 1})                                  # ����MongoDB�������İ汾�źͷ�����OS�������Ϣ
            db.runCommand({"collStats" : tablename})                          # ���ظü��ϵ�ͳ����Ϣ���������ݴ�С���ѷ���洢�ռ��С�������Ĵ�С��
            db.runCommand({"dropDatabase" : 1})                               # ��յ�ǰ���ݿ����Ϣ������ɾ�����еļ��Ϻ�����
            db.runCommand({"isMaster" : 1})                                   # ��鱾�������������������Ǵӷ�����
            db.runCommand({"ping" : 1})                                       # �������������Ƿ����������������������������Ҳ����������
            db.runCommand({"repaireDatabase" : 1})                            # �Ե�ǰ���ݿ�����޸���ѹ����������ݿ��ر����������ǳ���ʱ
            db.runCommand({"serverStatus" : 1})                               # �鿴��̨�������Ĺ���ͳ����Ϣ
            # ĳЩ���������admin���ݿ������У������������
            db.runCommand({"renameCollection" : ������, "to"��������})          # �Լ�����������ע��������������Ҫ�������ļ��������ռ䣬��foo.bar, ��ʾ���ݿ�foo�µļ���bar��
            db.runCommand({"listDatabases" : 1})                              # �г������������е����ݿ�

            mongo  172.20.20.1:27072/mdb --eval "db.tb.count();"              # shellִ��mongo���
            mongo --host  172.20.20.1 --port 27049

            rs.config();                                                      # �鿴��Ⱥ����
            rs.status();                                                      # �鿴��Ⱥ�ڵ��״̬
            db.currentOp()                                                    # ��ȡ��ǰ����ִ�еĲ���,�ɶ�Ӧ�������ӵ�ip:port
            db.runCommand( { logRotate : 1 } )                                # ��־��ת
            rs.slaveOk()                                                      # ���ôӿ�shell�ɶ�
            rs.addArb("172.16.10.199:27020");                                 # ����ٲýڵ�
            rs.add({host: "10.2.2.2:27047", priority: 0, hidden: true})       # ��Ӵӽڵ� hidden true���ؽڵ�[priority����Ϊ0]  false������
            rs.remove("172.20.80.216:27047");                                 # ɾ���ڵ�
            rs.stepDown(120)                                                  # ������ִ���л�Ϊ��,120����л�����
            show dbs                                                          # ��ѯdb
            use post                                                          # ѡ��db
            show tables                                                       # �鿴�ĵ��б�
            db.tb.drop()                                                      # ɾ������ ��ҪȨ��
            db.tb.remove({})                                                  # ɾ����������
            db.tb.count()                                                     # ��ѯ�ĵ�����
            db.tb.find()                                                      # �鿴�ĵ�����
            db.tb.find({_id:37530555})                                        # ��ѯָ��id
            db.tb.find().sort({_id:-1}).limit(1)                              # ��ѯ�ĵ����һ��
            db.tb.find({"processed" : {"$ne" : true}}).limit(1);              # �ֶβ�Ϊ true
            db.tb.find({"processed" : {"$eq" : true}}).limit(1);              # �ֶ�Ϊ true
            db.tb.find({"processed" : {"$exists" : false}}).limit(1);         # �ֶβ�����

            db.tb.ensureIndex({"status":1}, {background:true})                # ��̨������
            db.tb.getIndexes()                                                # �鿴����
            db.tb.ensureIndex({"c_type":1},{backgrounnd:true})                # ��̨�������  1����  -1����
            db.tb.dropIndex({"c_type":1});                                    # ɾ������

    ```

##        �ߡ����̿���{
```shell

            db.currentOp()                  # �鿴�����
            db.$cmd.sys.inprog.findOne()    # �鿴����� ������һ��
                opid      # �������̺�
                op        # ��������(��ѯ\����)
                ns        # �����ռ�,ָ���������ĸ�����
                query     # ������������ǲ�ѯ,���ｫ��ʾ����Ĳ�ѯ����
                lockType  # ��������,ָ���Ƕ�������д��

            db.killOp(opidֵ)                         # ��������
            db.$cmd.sys.killop.findOne({op:opidֵ})   # ��������

    ```

##        �ˡ����ݻ�ԭ{
```shell
            # mongodump ��Ȼ�ܲ�ͣ������,����Ϊ�˻�ȡʵʱ������ͼ������,ʹ��fsync������������ʱ��������Ŀ¼���Ҳ���������
            # fsync��ǿ�Ʒ����������л�����������д�����.���lock����ֹ�����ݿ�Ľ�һ��д��,֪���ͷ���Ϊֹ
            db.runCommand({"fsync":1,"lock":1})   # ִ��ǿ�Ƹ�����д����
            db.$cmd.sys.unlock.findOne()          # ����
            db.currentOp()                        # �鿴�����Ƿ�����

            mongoexport -d test -c t1 -o t1.dat                 # ����JSON��ʽ
                -c         # ָ����������
                -d         # ʹ�ÿ�
            mongoexport -d test -c t1 -csv -f num -o t1.dat     # ����csv��ʽ
                -csv       # ָ������csv��ʽ
                -f         # ָ����Ҫ������Щ��

            mongoimport -d test -c t1 -file t1.dat                           # mongoimport��ԭJSON��ʽ
            mongoimport -d test -c t1 -type csv --headerline -file t1.dat    # mongoimport��ԭcsv��ʽ����
                --headerline                # ָ���������һ�� ��Ϊ��һ��������

            mongodump -d test -o /bak/mongodump                # mongodump���ݱ���
            mongorestore -d test --drop /bak/mongodump/*       # mongorestore�ָ�
                --drop      # �ָ�ǰ��ɾ��
                --gzip      # ѹ��

            # ����һ����
            # --excludeCollection string # �ų�ָ���ļ��� Ҫ�ų������ʹ�ö��
            mongodump --host 127.0.0.1:27080 -d dbname  -c tablename  -o /data/reports/
            mongodump --host 127.0.0.1:27080 -d dbname  -c tablename  -o /data/reports/reports  -u root -p tAvaa5yNUE --authenticationDatabase admin

            # �ָ�һ����
            mongorestore --host 127.0.0.1:27080 -d dbname  -c tablename --drop --dir=/data/reports/tablename.bson

            # ���߿���һ����
            db.copyDatabase(fromdb, todb, fromhost, username, password, mechanism)
            db.copyDatabase('mate','mate', '172.16.255.176:27047')

    ```

##        �š��޸�{
```shell

            # ��ͣ��������������������ر�ʱ,����ɲ��������𻵶�ʧ
            mongod --repair      # �޸�����:����ʱ����� --repair
            # �޸�����:�������ĵ�����,Ȼ�����ϵ���,������Ч�ĵ�.��ɺ��ؽ�������ʱ��ϳ�,�ᶪ�����ĵ�
            # �޸����ݻ�����ѹ�����ݿ������
            db.repairDatabase()    # �����е�mongodb��ʹ�� repairDatabase �޸���ǰʹ�õ����ݿ�
            {"repairDatabase":1}   # ͨ����������

    ```

##        ʮ��pythonʹ��mongodb{
```shell

            ԭ��: http://blog.nosqlfan.com/html/2989.html

            easy_install pymongo      # python2.7+
            import pymongo
            connection=pymongo.Connection('localhost',27017)   # ��������
            db = connection.test_database                      # �л����ݿ�
            collection = db.test_collection                    # ��ȡcollection
            # db��collection������ʱ�����ģ������Documentʱ����������

            �ĵ����, _id�Զ�����
                import datetime
                post = {"author": "Mike",
                    "text": "My first blog post!",
                    "tags": ["mongodb", "python", "pymongo"],
                    "date": datetime.datetime.utcnow()}
                posts = db.posts
                posts.insert(post)
                ObjectId('...')

            ��������
                new_posts = [{"author": "Mike",
                    "text": "Another post!",
                    "tags": ["bulk", "insert"],
                    "date": datetime.datetime(2009, 11, 12, 11, 14)},
                    {"author": "Eliot",
                    "title": "MongoDB is fun",
                    "text": "and pretty easy too!",
                    "date": datetime.datetime(2009, 11, 10, 10, 45)}]
                posts.insert(new_posts)
                [ObjectId('...'), ObjectId('...')]

            ��ȡ����collection
                db.collection_names()    # �൱��SQL��show tables

            ��ȡ�����ĵ�
                posts.find_one()

            ��ѯ����ĵ�
                for post in posts.find():
                    post

            �������Ĳ�ѯ
                posts.find_one({"author": "Mike"})

            �߼���ѯ
                posts.find({"date": {"$lt": "d"}}).sort("author")

            ͳ������
                posts.count()

            ������
                from pymongo import ASCENDING, DESCENDING
                posts.create_index([("date", DESCENDING), ("author", ASCENDING)])

            �鿴��ѯ��������
                posts.find({"date": {"$lt": "d"}}).sort("author").explain()["cursor"]
                posts.find({"date": {"$lt": "d"}}).sort("author").explain()["nscanned"]

    ```

##    JDK��װ{
```shell

        vim /etc/profile.d/jdk.sh
        export JAVA_HOME=/usr/local/jdk1.8.0_151
        export PATH=$JAVA_HOME/bin:$PATH

        . /etc/profile         # �����µĻ�������
        jps -ml                # �鿴java����
        jstat -gc 18381 1s 30  # �鿴java����gc���
```

##    redis��̬���ڴ�{
```shell

        ./redis-cli -h 10.10.10.11 -p 6401
        save                                # ���浱ǰ����
        config get *                        # �г����е�ǰ����
        config get maxmemory                # �鿴ָ������
        config set maxmemory  15360000000   # ��̬�޸�����ڴ����ò���

```

##    nfs{
```shell

        # ����rpc����ͨ�� portmap[centos5] �� rpcbind[centos6]
        yum install nfs-utils portmap    # centos5��װ
        yum install nfs-utils rpcbind    # centos6��װ

        vim /etc/exports                 # �����ļ�
        # sync                           # ͬ��д��
        # async                          # �ݴ沢��ֱ��д��
        # no_root_squash                 # �����û���ʹ��root��ݲ���
        # root_squash                    # ʹ�������Ϊroot��ѹ��������ʹ��,��nobody,��԰�ȫ
        # all_squash                     # ����NFS��ʹ������ݶ���ѹ��Ϊ����
        /data/images 10.10.10.0/24(rw,sync,no_root_squash)

        service  portmap restart         # ����centos5��nfs������rpc����
        service  rpcbind restart         # ����centos6��nfs������rpc����
        service  nfs restart             # ����nfs����  ȷ������ portmap �� rpcbind ����������
        service  nfs reload              # ����NFS���������ļ�
        showmount -e                     # ����˲鿴�Լ�����ķ���
        showmount -a                     # ��ʾ�Ѿ���ͻ��������ϵ�Ŀ¼��Ϣ
        showmount -e 10.10.10.3          # �г�����˿ɹ�ʹ�õ�NFS����  �ͻ��˲����ܷ����nfs����
        mount -t nfs 10.10.10.3:/data/images/  /data/img   # ����nfs  ����ӳ�Ӱ���Ӳ��� noac

        # ����˵� portmap �� rpcbind ��ֹͣ��nfs��Ȼ��������������umout�ƻ���ʾ�� not found / mounted or server not reachable  ������������portmap �� rpcbind Ҳ�޼����¡� nfsҲҪ��������������nfs������Ȼ�ǲ������ġ�
        # ͬʱ�ѹ��ػ����NFS�ͻ���df��ס�͹���Ŀ¼�޷����ʡ������� mount �鿴��ǰ�����������¼������Ϣ����ǿ��ж�ع���Ŀ¼�����¹���
        umount -f /data/img/             # ǿ��ж�ع���Ŀ¼  �绹������  umount -l /data/img/

        nfsstat -c                       # �ͻ������ͺ;ܾ���RPC��NFS������Ŀ����Ϣ
        nfsstat -cn                      # ��ʾ�ʹ�ӡ��ͻ���NFS������ص���Ϣ
        nfsstat -r                       # ��ʾ�ʹ�ӡ�ͻ����ͷ���������RPC������ص���Ϣ
        nfsstat �Cs                       # ��ʾ���ڷ��������պ;ܾ���RPC��NFS������Ŀ����Ϣ

```

##    hdfs{
```shell
        hdfs --help                  # ���в���

        hdfs dfs -help               # �����ļ�ϵͳ������Hadoop�ļ�ϵͳ
        hdfs dfs -ls /logs           # �鿴
        hdfs dfs -ls /user/          # �鿴�û�
        hdfs dfs -cat
        hdfs dfs -df
        hdfs dfs -du
        hdfs dfs -rm
        hdfs dfs -tail
        hdfs dfs �Cput localSrc dest  # �ϴ��ļ�

        hdfs dfsadmin -help          # hdfs��Ⱥ�ڵ����
        hdfs dfsadmin -report        # �������ļ�ϵͳͳ����Ϣ
```

}

#5 ����{
```shell
    rz                                                                    # ͨ��ssh�ϴ�С�ļ�
    sz                                                                    # ͨ��ssh����С�ļ�
    ifconfig eth0 down                                                    # ��������
    ifconfig eth0 up                                                      # ��������
    ifup eth0:0                                                           # ��������
    mii-tool em1                                                          # �鿴�����Ƿ�����
    traceroute www.baidu.com                                              # ��������
    vi /etc/resolv.conf                                                   # ����DNS  nameserver IP ����DNS��������IP��ַ
    nslookup www.moon.com                                                 # ��������IP
    dig -x www.baidu.com                                                  # ��������IP
    dig +trace -t A domainname                                            # ����dns
    dig +short txt hacker.wp.dg.cx                                        # ͨ�� DNS ����ȡ Wikipedia ��hacker����
    host -t txt hacker.wp.dg.cx                                           # ͨ�� DNS ����ȡ Wikipedia ��hacker����
    lynx                                                                  # �ı�����
    wget -P path -O name url                                              # ����  ����:wgetrc   -q ���� -c ����
    dhclient eth1                                                         # �Զ���ȡIP
    mtr -r www.baidu.com                                                  # ����������·�ڵ���Ӧʱ�� # trace ping ���
    ipcalc -m "$ip" -p "$num"                                             # ����IP�������������������
    curl -I www.baidu.com                                                 # �鿴��ҳhttpͷ
    curl -s www.baidu.com                                                 # ����ʾ����
    queryperf -d list -s DNS_IP -l 2                                      # BIND�Դ�DNSѹ������  [list �ļ���ʽ:www.turku.fi A]
    telnet ip port                                                        # ���Զ˿��Ƿ񿪷�,��Щ�����ֱ����������õ�����״̬
    echo "show " |nc $ip $port                                            # ������telnetһ���¼�õ������
    nc -l -p port                                                         # ����ָ���˿�
    nc -nv -z 10.10.10.11 1080 |grep succeeded                            # ��������˿��Ƿ񿪷�
    curl -o /dev/null -s -m 10 --connect-timeout 10 -w %{http_code} $URL  # ���ҳ��״̬
    curl -X POST -d "user=xuesong&pwd=123" http://www.abc.cn/Result       # �ύPOST����
    curl -s http://20140507.ip138.com/ic.asp                              # ͨ��IP138ȡ������������IP
    curl http://IP/ -H "X-Forwarded-For: ip" -H "Host: www.ttlsa.com"     # ����ָ��IP����Ӧ����,HTTPserverֻ�� Host�ֶ�
    ifconfig eth0:0 192.168.1.221 netmask 255.255.255.0                   # �����߼�IP��ַ
    echo 1 > /proc/sys/net/ipv4/icmp_echo_ignore_all                      # ��ping
    net rpc shutdown -I IP_ADDRESS -U username%password                   # Զ�̹ص�һ̨WINDOWS����
    wget --random-wait -r -p -e robots=off -U Mozilla www.example.com     # �ݹ鷽ʽ����������վ
    sshpass -p "$pwd" rsync -avzP /dir  user@$IP:/dir/                    # ָ��������⽻��ͬ��Ŀ¼
    rsync -avzP --delete /dir/ user@$IP:/dir/                             # �޲�ͬ��Ŀ¼ ���Կ�����մ�Ŀ¼,ĩβ��/ͬ��Ŀ¼
    rsync -avzP -e "ssh -p 22 -e -o StrictHostKeyChecking=no" /dir user@$IP:/dir         # ָ��ssh����ͬ��
```
##    ץ��{
```shell

        -i eth1                             # ֻץ�����ӿ�eth1�İ�
        -t                                  # ����ʾʱ���
        -s 0                                # ץȡ���ݰ�ʱĬ��ץȡ����Ϊ68�ֽڡ�����-S 0 �����ץ�����������ݰ�
        -c 100                              # ֻץȡ100�����ݰ�
        dst port ! 22                       # ��ץȡĿ��˿���22�����ݰ�
        tcpdump tcp port 22                 # ץ��
        tcpdump -n -vv udp port 53          # ץudp��dns�� ����ʾip
        tcpdump port 10001 -A -s0           # ������ʾascii���ݰ�
        tcpdump -i any  host x.x.x.x -s 0 -w /tmp/cap.pcap   # �Զ�ip
        tcpdump -i any -s 0 host 172.20.81.107 or host 172.16.3.72 -C 50 -W 5 -w /tmp/20190122ng.cap

```


##    һ�ζ�����ʧ�ܹ��϶�λ{
```shell

        # php��python������ýӿ�,ͨ��������slb,�����nginx,ż����ʱ,���nginx������,����û��nginx,��ͨ�����,�޷���nginx����tcp����
        ss -nl |grep :80  # �鿴 accept ����ֵ,������Ӧ�ô�һ��
        watch -n 1 'nstat -z -t 1 | grep -e TcpActiveOpens -e TcpExtListenOverflows -e TcpAttemptFails -e TcpPassiveOpen -e TcpExtTCPSynRetrans -e TcpRetransSegs  -e TcpOutSegs -e TcpInSegs'

        TcpAttemptFails         TCP��������ʧ��,����ǰ���
        TcpExtTCPSynRetrans     TCP���˽�������ʧ��


        # nginx ���ں˶���Ҫ��������Ч,��������˿�,��Ҫ��socket����
        listen 10.87.128.29:51528 default_server backlog=4096;


        https://m.aliyun.com/yunqi/articles/118472?spm=5176.8091938.0.0.11e86ccF4oOeZ
```

##    ���������鿴{
```shell

        watch more /proc/net/dev    # ʵʱ��������ļ�ϵͳ �ۼ�ֵ
        iptraf                      # ���������鿴����
        nethogs -d 5 eth0 eth1      # ������ʵʱͳ���������� epelԴnethogs
        iftop -i eth0 -n -P         # ʵʱ�������
```
##        sar {
```shell
            -n������6����ͬ�Ŀ���: DEV | EDEV | NFS | NFSD | SOCK | ALL
            DEV��ʾ����ӿ���Ϣ
            EDEV��ʾ������������ͳ������
            NFSͳ�ƻ��NFS�ͻ��˵���Ϣ
            NFSDͳ��NFS����������Ϣ
            SOCK��ʾ�� ������Ϣ
            ALL��ʾ����5������

            sar -n DEV 1 10

            rxpck/s   # ÿ���ӽ��յ����ݰ�
            txpck/s   # ÿ���ӷ��͵����ݰ�
            rxbyt/s   # ÿ���ӽ��յ��ֽ���
            txbyt/s   # ÿ���ӷ��͵��ֽ���
            rxcmp/s   # ÿ���ӽ��յ�ѹ�����ݰ�
            txcmp/s   # ÿ���ӷ��͵�ѹ�����ݰ�
            rxmcst/s  # ÿ���ӽ��յĶಥ���ݰ�

    ```

##    netstat{
```shell

        # ��ʮ�򲢷��������netstat��û����Ӧ������ʹ�� ss ����
        -a     # ��ʾ���������е�Socket
        -t     # ��ʾTCP����
        -u     # ��ʾUDP����
        -n     # ��ʾ�����ѽ�������Ч����
        netstat -anlp           # �鿴����
        netstat -tnlp           # ֻ�鿴tcp�����˿�
        netstat -r              # �鿴·�ɱ�
```

##    ss{
```shell

        # netstat�Ǳ���/proc����ÿ��PIDĿ¼��ssֱ�Ӷ�/proc/net�����ͳ����Ϣ������ssִ�е�ʱ��������Դ�Լ����ĵ�ʱ�䶼��netstat�ٺܶ�
        ss -s                          # �г���ǰsocket��ϸ��Ϣ
        ss -l                          # ��ʾ���ش򿪵����ж˿�
        ss -tnlp                       # ��ʾÿ�����̾���򿪵�socket
        ss -ant                        # ��ʾ����TCP socket
        ss -u -a                       # ��ʾ����UDP Socekt
        ss dst 192.168.119.113         # ƥ��Զ�̵�ַ
        ss dst 192.168.119.113:http    # ƥ��Զ�̵�ַ�Ͷ˿ں�
        ss dst 192.168.119.113:3844    # ƥ��Զ�̵�ַ�Ͷ˿ں�
        ss src 192.168.119.103:16021   # ƥ�䱾�ص�ַ�Ͷ˿ں�
        ss -o state established '( dport = :smtp or sport = :smtp )'        # ��ʾ�����ѽ�����SMTP����
        ss -o state established '( dport = :http or sport = :http )'        # ��ʾ�����ѽ�����HTTP����
        ss -x src /tmp/.X11-unix/*         # �ҳ���������X�������Ľ���

```

##    �������鿴{
```shell

        netstat -n | awk '/^tcp/ {++S[$NF]} END {for(a in S) print a, S[a]}'
        SYN_RECV     # ���ڵȴ����������
        ESTABLISHED  # �������ݴ���״̬,�ȵ�ǰ������
        TIME_WAIT    # ������ϣ��ȴ���ʱ����������
        CLOSE_WAIT   # �ͻ����쳣�ر�,û�����4�λ���  ��������ܴ��ڹ�����Ϊ

```

##    ssh{
```shell

        ssh -p 22 user@192.168.1.209                            # ��linux ssh��¼��һ̨linux
        ssh -p 22 root@192.168.1.209 CMD                        # ����ssh����Զ������
        scp -P 22 file root@ip:/dir                             # �ѱ����ļ�������Զ������
        scp -l 100000  file root@ip:/dir                        # �����ļ���Զ�̣������ٶ�100M
        sshpass -p 'pwd' ssh -n root@$IP "echo hello"           # ָ������Զ�̲���
        ssh -o StrictHostKeyChecking=no $IP                     # ssh���Ӳ���ʾyes
        ssh -t "su -"                                           # ָ��α�ն� �ͻ����Խ���ģʽ����
        scp root@192.168.1.209:/RemoteDir /localDir             # ��Զ��ָ���ļ�����������
        pscp -h host.ip /a.sh /opt/sbin/                        # ���������ļ�
        ssh -N -L2001:remotehost:80 user@somemachine            # ��SSH�����˿�ת��ͨ��
        ssh -t host_A ssh host_B                                # Ƕ��ʹ��SSH
        ssh -t -p 22 $user@$Ip /bin/su - root -c {$Cmd};        # Զ��suִ������ Cmd="\"/sbin/ifconfig eth0\""
        ssh-keygen -t rsa                                       # ������Կ
        ssh-copy-id -i xuesong@10.10.10.133                     # ����key
        vi $HOME/.ssh/authorized_keys                           # ��Կ���λ��
        sshfs name@server:/path/to/folder /path/to/mount/point  # ͨ��ssh����Զ�������ϵ��ļ���
        fusermount -u /path/to/mount/point                      # ж��ssh���ص�Ŀ¼
        ssh user@host cat /path/to/remotefile | diff /path/to/localfile -                # ��DIFF�Ա�Զ���ļ��������ļ�
        su - user -c "ssh user@192.168.1.1 \"echo -e aa |mail -s test mail@163.com\""    # �л��û���¼Զ�̷����ʼ�
        pssh -h ip.txt -i uptime                                # ����ִ��ssh yum install pssh
```
##        SSH��������{
```shell

            # ����AҪ��������B

            ssh -NfR 1234:localhost:2223 user1@123.123.123.123 -p22    # ��A������1234�˿ں�B������2223�˿ڰ󶨣��൱��Զ�̶˿�ӳ��
            ss -ant   # ��ʱ��A������sshd��listen����1234�˿�
            # LISTEN     0    128    127.0.0.1:1234       *:*
            ssh localhost -p1234    # ��A�������ӱ���1234�˿�

```

##    ���������ļ�{
```shell

        vi /etc/sysconfig/network-scripts/ifcfg-eth0

        DEVICE=eth0
        BOOTPROTO=none
        BROADCAST=192.168.1.255
        HWADDR=00:0C:29:3F:E1:EA
        IPADDR=192.168.1.55
        NETMASK=255.255.255.0
        NETWORK=192.168.1.0
        ONBOOT=yes
        TYPE=Ethernet
        GATEWAY=192.168.1.1
        #ARPCHECK=no     # ����arp���

```

##    route {
```shell

        route                           # �鿴·�ɱ�
        route add default  gw 192.168.1.1  dev eth0                        # ���Ĭ��·��
        route add -net 172.16.0.0 netmask 255.255.0.0 gw 10.39.111.254     # ��Ӿ�̬·������
        route del -net 172.16.0.0 netmask 255.255.0.0 gw 10.39.111.254     # ɾ����̬·������

```

##    ��̬·��{
```shell

        vim /etc/sysconfig/static-routes
        any net 192.168.12.0/24 gw 192.168.0.254
        any net 192.168.13.0/24 gw 192.168.0.254

```

##    ���ssh������{
```shell

        sed -i 's/GSSAPIAuthentication yes/GSSAPIAuthentication no/' /etc/ssh/sshd_config
        sed -i '/#UseDNS yes/a\UseDNS no' /etc/ssh/sshd_config
        /etc/init.d/sshd reload

```

##    nmap{
```shell

        nmap -PT 192.168.1.1-111             # ��ping��ɨ���������Ŷ˿�
        nmap -O 192.168.1.1                  # ɨ���ϵͳ�ں˰汾
        nmap -sV 192.168.1.1-111             # ɨ��˿ڵ�����汾
        nmap -sS 192.168.1.1-111             # �뿪ɨ��(ͨ�������¼��־)
        nmap -P0 192.168.1.1-111             # ��pingֱ��ɨ��
        nmap -d 192.168.1.1-111              # ��ϸ��Ϣ
        nmap -D 192.168.1.1-111              # �޷��ҳ�����ɨ������(����IP)
        nmap -p 20-30,139,60000-             # �˿ڷ�Χ  ��ʾ��ɨ��20��30�Ŷ˿ڣ�139�Ŷ˿��Լ����д���60000�Ķ˿�
        nmap -P0 -sV -O -v 192.168.30.251    # ���ɨ��(��ping������汾���ں˰汾����ϸ��Ϣ)

        # ��֧��windows��ɨ��(�������ж��Ƿ���windows)
        nmap -sF 192.168.1.1-111
        nmap -sX 192.168.1.1-111
        nmap -sN 192.168.1.1-111

```

##    �����з���·{
```shell

        # �����жϽ���IP��·�����÷�����·�ɹ�����Ʒ���
        vi /etc/iproute2/rt_tables
        #���һ������
        252   bgp2  #ע����Ե����˳��
        ip route add default via �ڶ�����������IP(��Ĭ������) dev eth1 table bgp2
        ip route add from �����ڶ���ip table bgp2
        #�鿴
        ip route list table 252
        ip rule list
        #�ɹ��������ӿ�������

```

##    snmp{
```shell

        snmptranslate .1.3.6.1.2.1.1.3.0    # �鿴ӳ���ϵ
            DISMAN-EVENT-MIB::sysUpTimeInstance
        snmpdf -v 1 -c public localhost                            # SNMP����Զ�������Ĵ��̿ռ�
        snmpnetstat -v 2c -c public -a 192.168.6.53                # SNMP��ȡָ��IP�����п��Ŷ˿�״̬
        snmpwalk -v 2c -c public 10.152.14.117 .1.3.6.1.2.1.1.3.0  # SNMP��ȡ��������ʱ��
        # MIB��װ(ubuntu)
        # sudo apt-get install snmp-mibs-downloader
        # sudo download-mibs
        snmpwalk -v 2c -c public 10.152.14.117 sysUpTimeInstance   # SNMPͨ��MIB���ȡ��������ʱ��

```

##    TC��������{
```shell

        # ���ip���������ʿ���
        tc qdisc del dev eth0 root handle 1:                                                              # ɾ������1:
        tc qdisc add dev eth0 root handle 1: htb r2q 1                                                    # ��ӿ���1:
        tc class add dev eth0 parent 1: classid 1:1 htb rate 12mbit ceil 15mbit                           # ��������
        tc filter add dev eth0 parent 1: protocol ip prio 16 u32 match ip dst 10.10.10.1/24 flowid 1:1    # ָ��ip�ο��ƹ���

        # �������
        tc -s -d qdisc show dev eth0
        tc class show dev eth0
        tc filter show dev eth0
```
##        �����ϴ�����{
```shell

            tc qdisc del dev tun0 root
            tc qdisc add dev tun0 root handle 2:0 htb
            tc class add dev tun0 parent 2:1 classid 2:10 htb rate 30kbps
            tc class add dev tun0 parent 2:2 classid 2:11 htb rate 30kbps
            tc qdisc add dev tun0 parent 2:10 handle 1: sfq perturb 1
            tc filter add dev tun0 protocol ip parent 2:0 u32 match ip dst 10.18.0.0/24 flowid 2:10
            tc filter add dev tun0 parent ffff: protocol ip u32 match ip src 10.18.0.0/24 police rate 30kbps burst 10k drop flowid 2:11


            tc qdisc del dev tun0 root                                     # ɾ��ԭ�в���
            tc qdisc add dev tun0 root handle 2:0 htb                      # �������(��)���й��򣬲�ָ�� default ����ţ�Ϊ����ӿ� eth1 ��һ�����У�����Ϊ htb����ָ����һ�� handle ��� 2:0 ���ڱ�ʶ�����������
            tc class add dev tun0 parent 2:1 classid 2:10 htb rate 30kbps  # ����һ�������ٶ���30kbps
            tc class add dev tun0 parent 2:2 classid 2:11 htb rate 30kbps
            tc qdisc add dev tun0 parent 2:10 handle 1: sfq perturb 1      # ���������ƽ�㷨
            tc filter add dev tun0 protocol ip parent 2:0 u32 match ip dst 10.18.0.0/24 flowid 2:10  # ����2:10Ӧ����Ŀ���ַ�ϣ�������
            tc filter add dev tun0 parent ffff: protocol ip u32 match ip src 10.18.0.0/24 police rate 30kbps burst 10k drop flowid 2:11 # �ϴ�����

    ```

}

#6 ����{
```shell
    df -Ph                                          # �鿴Ӳ������
    df -T                                           # �鿴���̷�����ʽ
    df -i                                           # �鿴inode�ڵ�   ���inode�������޷������ļ�
    du -h dir                                       # ���Ŀ¼�������ļ���С
    du -sh *                                        # ��ʾ��ǰĿ¼����Ŀ¼�Ĵ�С
    mount -l                                        # �鿴�����������
    fdisk -l                                        # �鿴���̷���״̬
    fdisk /dev/hda3                                 # ����
    mkfs -t ext4  /dev/hda3                         # ��ʽ������
    fsck -y /dev/sda6                               # ���ļ�ϵͳ�޸�
    lsof |grep delete                               # �ͷŽ���ռ�ô��̿ռ�  �г����̺󣬲鿴�ļ��Ƿ���ڣ���������kill���˽���
    tmpwatch -afv 10   /tmp                         # ɾ��10Сʱ��δʹ�õ��ļ�  ������ҪĿ¼ʹ��
    cat /proc/filesystems                           # �鿴��ǰϵͳ֧���ļ�ϵͳ
    mount -o remount,rw /                           # �޸�ֻ���ļ�ϵͳΪ��д
    iotop                                           # ����ռ�ô���IO���   yum install iotop
    smartctl -H /dev/sda                            # ���Ӳ��״̬  # yum install smartmontools
    smartctl -i /dev/sda                            # ���Ӳ����Ϣ
    smartctl -a /dev/sda                            # ���������Ϣ
    e2label /dev/sda5                               # �鿴���
    e2label /dev/sda5 new-label                     # �������
    ntfslabel -v /dev/sda8 new-label                # NTFS��Ӿ��
    tune2fs -j /dev/sda                             # ext2����תext3����
    tune2fs -l /dev/sda                             # �鿴�ļ�ϵͳ��Ϣ
    mke2fs -b 2048 /dev/sda5                        # ָ���������С
    dumpe2fs -h /dev/sda5                           # �鿴���������Ϣ
    mount -t iso9660 /dev/dvd  /mnt                 # ���ع���
    mount -t ntfs-3g /dev/sdc1 /media/yidong        # ����ntfsӲ��
    mount -t nfs 10.0.0.3:/opt/images/  /data/img   # ����nfs ��Ҫ���� /etc/init.d/nfs reload  ������Ҫ������ portmap ����
    mount -o loop  /software/rhel4.6.iso   /mnt/    # ���ؾ����ļ�
```
##    ����IO���ܼ��{
```shell

        iostat -x 1 10

        % user       # ��ʾ�����û���(Ӧ�ó���)ִ��ʱ���ɵ� CPU ʹ���ʰٷֱȡ�
        % system     # ��ʾ����ϵͳ��(�ں�)ִ��ʱ���ɵ� CPU ʹ���ʰٷֱȡ�
        % idle       # ��ʾ���� CPU ���в���ϵͳû��δ��ɵĴ��� I/O ����ʱ��ʱ��ٷֱȡ�
        % iowait     # ��ʾ�� CPU �����ڼ�ϵͳ��δ��ɵĴ��� I/O ����ʱ��ʱ��ٷֱȡ�

        rrqm/s       # ÿ����� merge �Ķ�������Ŀ���� delta(rmerge)/s
        wrqm/s       # ÿ����� merge ��д������Ŀ���� delta(wmerge)/s
        r/s          # ÿ����ɵĶ� I/O �豸�������� delta(rio)/s
        w/s          # ÿ����ɵ�д I/O �豸�������� delta(wio)/s
        rsec/s       # ÿ������������� delta(rsect)/s
        wsec/s       # ÿ��д���������� delta(wsect)/s
        rkB/s        # ÿ���K�ֽ������� rsect/s ��һ�룬��Ϊÿ������СΪ512�ֽڡ�(��Ҫ����)
        wkB/s        # ÿ��дK�ֽ������� wsect/s ��һ�롣(��Ҫ����)
        avgrq-sz     # ƽ��ÿ���豸I/O���������ݴ�С (����)��delta(rsect+wsect)/delta(rio+wio)
        avgqu-sz     # ƽ��I/O���г��ȡ��� delta(aveq)/s/1000 (��Ϊaveq�ĵ�λΪ����)��
        await        # ƽ��ÿ���豸I/O�����ĵȴ�ʱ�� (����)���� delta(ruse+wuse)/delta(rio+wio)
        svctm        # ƽ��ÿ���豸I/O�����ķ���ʱ�� (����)���� delta(use)/delta(rio+wio)
        %util        # һ�����аٷ�֮���ٵ�ʱ������ I/O ����������˵һ�����ж���ʱ�� I/O �����Ƿǿյġ��� delta(use)/s/1000 (��Ϊuse�ĵ�λΪ����)
```
##        IO���ܺ�����׼{
```shell

            1�� ��� %util �ӽ� 100%��˵��������I/O����̫�࣬I/Oϵͳ�Ѿ������ɣ��ô��̿��ܴ���ƿ����
            2�� idle С��70% IOѹ���ͽϴ���,һ���ȡ�ٶ��н϶��wait.
            3�� ͬʱ���Խ�� vmstat �鿴�鿴b����(�ȴ���Դ�Ľ�����)��wa����(IO�ȴ���ռ�õ�CPUʱ��İٷֱ�,�߹�30%ʱIOѹ����)
            4�� svctm һ��ҪС�� await (��Ϊͬʱ�ȴ�������ĵȴ�ʱ�䱻�ظ�������),svctm �Ĵ�Сһ��ʹ��������й�,CPU/�ڴ�ĸ���Ҳ�������Ӱ��,�������Ҳ���ӵ��� svctm ������. await �Ĵ�Сһ��ȡ���ڷ���ʱ��(svctm) �Լ� I/O ���еĳ��Ⱥ� I/O ����ķ���ģʽ. ��� svctm �ȽϽӽ� await,˵�� I/O ����û�еȴ�ʱ��;��� await Զ���� svctm,˵�� I/O ����̫��,Ӧ�õõ�����Ӧʱ�����,�����Ӧʱ�䳬�����û���������ķ�Χ,��ʱ���Կ��Ǹ�������Ĵ���,�����ں� elevator �㷨,�Ż�Ӧ��,�������� CPU
            5�� ���г���(avgqu-sz)Ҳ����Ϊ����ϵͳ I/O ���ɵ�ָ�꣬������ avgqu-sz �ǰ��յ�λʱ���ƽ��ֵ�����Բ��ܷ�ӳ˲��� I/O ��ˮ��

    ```

##    iotop{
```shell

        # ���ӽ��̴���I/O

        yum install iotop

        -o        # ֻ��ʾ��io�����Ľ���
        -b        # ������ʾ���޽�������Ҫ������¼���ļ���
        -n NUM    # ��ʾNUM�Σ���Ҫ���ڷǽ���ʽģʽ��
        -d SEC    # ���SEC����ʾһ�Ρ�
        -p PID    # ��صĽ���pid��
        -u USER   # ��صĽ����û���

        # ���Ҽ�ͷ���ı�����ʽ��Ĭ���ǰ�IO����
        r         # �ı�����˳��
        o         # ֻ��ʾ��IO����Ľ��̡�
        p         # ����/�̵߳���ʾ��ʽ���л���
        a         # ��ʾ�ۻ�ʹ������
        q         # �˳���

```

##    ����swap�ļ�����{
```shell

        dd if=/dev/zero of=/swap bs=1024 count=4096000            # ����һ���㹻����ļ�
        # count��ֵ����1024 x ����Ҫ���ļ���С, 4096000��4G
        mkswap /swap                      # ������ļ����swap�ļ�
        swapon /swap                      # �������swap�ļ�
        /swap swap swap defaults 0 0      # ��ÿ�ο�����ʱ���Զ�����swap�ļ�, ��Ҫ�� /etc/fstab �ļ�������һ��
        cat /proc/swaps                   # �鿴swap
        swapoff -a                        # �ر�swap
        swapon -a                         # ����swap

```

##    ��Ӳ�̹���{
```shell

        fdisk /dev/sdc
        p    #  ��ӡ����
        d    #  ɾ������
        n    #  ������������һ��Ӳ�����4������������չռһ��������λ�á�p������ e��չ��
        w    #  �����˳�
        mkfs.ext4 -L ���  /dev/sdc1            # ��ʽ����Ӧ����
        mount /dev/sdc1  /mnt                  # ����
        vi /etc/fstab                          # ��ӿ������ط���
        LABEL=/data            /data                   ext4    defaults        1 2      # �þ�����
        /dev/sdb1              /data4                  ext4    defaults        1 2      # ����ʵ��������
        /dev/sdb2              /data4                  ext4    noatime,defaults        1 2

        ��һ������"1"��ѡ�"dump"����ʹ�������һ���ļ�ϵͳӦ���Զ��Ƶ�ʽ���ת����������Ҫת�������ø��ֶ�Ϊ0
        �ڶ�������"2"���ֶα�fsck������������������ʱ��Ҫ��ɨ����ļ�ϵͳ��˳�򣬸��ļ�ϵͳ"/"��Ӧ���ֶε�ֵӦ��Ϊ1�������ļ�ϵͳӦ��Ϊ2�������ļ�ϵͳ����������ʱɨ�������ø��ֶ�Ϊ0
        ���� noatime ѡ����أ�mount���ļ�ϵͳʱ�����ļ��Ķ�ȡ��������ļ������е�atime��Ϣ������noatime����Ҫ�����������ļ�ϵͳ���ļ���д�������ļ�ֻ�Ǽ򵥵ر�ϵͳ��ȡ������д������Զ���˵Ҫ������ϵͳ��Դ�������������ÿ���������߷�����������.wtime��Ϣ��Ȼ��Ч���κ�ʱ���ļ���д������Ϣ�Ա����¡�

        mount -a    # �Զ����� fstab �ļ����أ��������ô���ϵͳ�޷�����

```

##    �����2T��16T����{
```shell

        parted /dev/sdb                # ��Դ��̷���
        (parted) mklabel gpt           # ����Ϊ gpt
        (parted) print
        (parted) mkpart  primary 0KB 22.0TB        # ָ��������С
        Is this still acceptable to you?
        Yes/No? Yes
        Ignore/Cancel? Ignore
        (parted) print
        Model: LSI MR9271-8i (scsi)
        Disk /dev/sdb: 22.0TB
        Sector size (logical/physical): 512B/512B
        Partition Table: gpt
        Number  Start   End     Size    File system  Name     Flags
         1      17.4kB  22.0TB  22.0TB               primary
        (parted) quit

        mkfs.ext4 /dev/sdb1        # e2fsprogs������֧�ִ���16TӲ��

        # ����16T�ĵ�������ext4��ʽ��������Ҫ����e2fsprogs
        Size of device /dev/sdb1 too big to be expressed in 32 bits using a blocksize of 4096.

        yum -y install xfsprogs
        mkfs.xfs -f /dev/sdb1              # ����16T��������Ҳ����ʹ��XFS����,��inodeռ�úܴ�,�Դ�����С�ļ�֧�ֲ�̫��

```

##    ���������ݴ���{
```shell

        # ����ECS ��ʵ�����̣���ѡ��������, ѡ�����ݴ���
        yum install cloud-utils-growpart
        yum install xfsprogs
        df -h    # �鿴Ŀǰ������С
        fdisk -l # �鿴�����豸
        growpart /dev/vda 1         # ���ݷ��� ���û�з���,Ĭ������,����Ҫִ��
        resize2fs /dev/vda1         # �����ļ�ϵͳ ext4�ļ�ϵͳ 
        xfs_growfs /dev/vda1        # �����ļ�ϵͳ xfs�ļ�ϵͳ
        df -h                       # �ٲ鿴������С,�Ƿ�����

```

##    raidԭ��������{
```shell

        raid0����2��Ӳ��.��������,���ܺ�,ͬʱ��д,����һ�����군
        raid1����2��Ӳ��.�൱����,һ���洢,һ������.��ȫ�ԱȽϸ�.�������ܱ�0��
        raid5����3��Ӳ��.�ֱ�洢У����Ϣ�����ݣ�����һ������У����Ϣ�ָܻ�
        raid6����4��Ӳ��.������������żϵͳ,�ɻ��������,д���ܷǳ���

```

}

#7 �û�{
```shell
    users                                      # ��ʾ���еĵ�¼�û�
    groups                                     # �г���ǰ�û�������������
    who -q                                     # ��ʾ���еĵ�¼�û�
    groupadd                                   # �����
    useradd user                               # �����û�
    passwd username                            # �޸�����
    userdel -r                                 # ɾ���ʺż���Ŀ¼
    chown -R user:group                        # �޸�Ŀ¼ӵ����(R�ݹ�)
    chown y\.li:mysql                          # �޸��������û��а�����"."
    umask                                      # �����û��ļ���Ŀ¼���ļ�����ȱʡ����ֵ
    chgrp                                      # �޸��û���
    finger                                     # �����û���ʾ��Ϣ
    echo "xuesong" | passwd user --stdin       # �ǽ����޸�����
    useradd -g www -M  -s /sbin/nologin  www   # ָ���鲢�������¼���û�,nologin����ʹ�÷���
    useradd -g www -M  -s /bin/false  www      # ָ���鲢�������¼���û�,false��Ϊ�ϸ�
    useradd -d /data/song -g song song         # �����û���ָ����Ŀ¼����
    usermod -l newuser olduser                 # �޸��û���
    usermod -g user group                      # �޸��û�������
    usermod -d dir -m user                     # �޸��û���Ŀ¼
    usermod -G group user                      # ���û���ӵ�������
    gpasswd -d user group                      # ������ɾ���û�
    su - user -c " #cmd1; "                    # �л��û�ִ��
```
##    �ָ�����{
```shell

        # �����뵥�û�ģʽ: ��linux����grub���ڰ�װ��ϵͳ���水"e"��Ȼ�����grub�������ļ����������ƶ���굽�ڶ���"Ker����"���ٰ�"e"��Ȼ������һ�еĽ�β���ϣ��ո� single���߿ո�1�س���Ȼ��"b"�������ͽ�����"���û�ģʽ"
```

##    ����Ȩ��{
```shell

        s�� S ��SUID������Ӧ��ֵ4
        s�� S ��SGID������Ӧ��ֵ2
        t�� T ����Ӧ��ֵ1
        ��S������ӵ��rootȨ�ޣ�����û��ִ��Ȩ��
        Сs��ӵ����Ȩ��ӵ��ִ��Ȩ�ޣ�����ļ����Է���ϵͳ�κ�root�û����Է��ʵ���Դ
        T��T��Sticky����/tmp�� /var/tmpĿ¼�������û���ʱ��ȡ�ļ����༴ÿλ�û���ӵ��������Ȩ�޽����Ŀ¼��ȥ�����ɾ�����ƶ��ļ�

```

}

#8 �ű�{
```shell
    #!/bin/sh                             # �ڽű���һ�нű�ͷ # shΪ��ǰϵͳĬ��shell,��ָ��Ϊbash��shell
    shopt                                 # ��ʾ������shell�е���Ϊѡ��
    sh -x                                 # ִ�й���
    sh -n                                 # ����﷨
    set -e                                # ��ָ���ֵ������0���������˳�shell
    (a=bbk)                               # ���Ŵ�����shell����
    basename /a/b/c                       # ��ȫ·���б������һ���ļ�����Ŀ¼
    dirname                               # ȡ·��
    $RANDOM                               # �����
    $$                                    # ���̺�
    source FileName                       # �ڵ�ǰbash�����¶�ȡ��ִ��FileName�е�����  # ��ͬ . FileName
    sleep 5                               # ���˯��5��
    trap                                  # �ڽ��յ��źź�Ҫ��ȡ���ж�
    trap "" 2 3                           # ��ֹctrl+c
    $PWD                                  # ��ǰĿ¼
    $HOME                                 # ��Ŀ¼
    $OLDPWD                               # ֮ǰһ��Ŀ¼��·��
    cd -                                  # ������һ��Ŀ¼·��
    local ret                             # �ֲ�����
    yes                                   # �ظ���ӡ
    yes |rm -i *                          # �Զ��ش�y��������
    ls -p /home                           # ����Ŀ¼���ļ���
    ls -d /home/                          # �鿴ƥ������·��
    time a.sh                             # ���Գ���ִ��ʱ��
    echo -n aa;echo bb                    # ������ִ����һ�仰 ���ַ���ԭ�����
    echo -e "s\tss\n\n\n"                 # ʹת����Ч
    echo $a | cut -c2-6                   # ȡ�ַ�������Ԫ
    echo {a,b,c}{a,b,c}{a,b,c}            # �������(������һ��Ԫ�طֱ������������Ԫ�����)
    echo $((2#11010))                     # ������ת10����
    echo aaa | tee file                   # ��ӡͬʱд���ļ� Ĭ�ϸ��� -a׷��
    echo {1..10}                          # ��ӡ10���ַ�
    printf '%10s\n'|tr " " a              # ��ӡ10���ַ�
    pwd | awk -F/ '{ print $2 }'          # ����Ŀ¼��
    tac file |sed 1,3d|tac                # ���ö�ȡ�ļ�  # ɾ�����3��
    tail -3 file                          # ȡ���3��
    outtmp=/tmp/$$`date +%s%N`.outtmp     # ��ʱ�ļ�����
    :(){ :|:& };:                         # forkը��,ϵͳִ�к����Ľ���,ֱ��ϵͳ����
    echo -e "\e[32mcolour\e[0m"           # ��ӡ��ɫ
    echo -e "\033[32mcolour\033[m"        # ��ӡ��ɫ
    echo -e "\033[0;31mL\033[0;32mO\033[0;33mV\033[0;34mE\t\033[0;35mY\033[0;36mO\033[0;32mU\e[m"    # ��ӡ��ɫ
```
##    ������ʽ{
```shell

        ^                       # ���׶�λ
        $                       # ��β��λ
        .                       # ƥ������з�����������ַ�
        *                       # ƥ��0�����ظ��ַ�
        +                       # �ظ�һ�λ�����
        ?                       # �ظ���λ�һ��
        ?                       # ����̰������ .*? ��ʾ��Сƥ��
        []                      # ƥ��һ��������һ���ַ�
        [^]                     # ƥ�䲻��ָ�����ڵ��ַ�
        \                       # ����ת��Ԫ�ַ�
        <                       # ���׶�λ��(֧��vi��grep)  <love
        >                       # ��β��λ��(֧��vi��grep)  love>
        x\{m\}                  # �ظ�����m��
        x\{m,\}                 # �ظ���������m��
        x\{m,n\}                # �ظ���������m�β�����n��
        X?                      # ƥ�������λ�һ�εĴ�д��ĸ X
        X+                      # ƥ��һ��������ĸ X
        ()                      # �����ڵ��ַ�Ϊһ��
        (ab|de)+                # ƥ��һ�����ģ�����һ���� abc �� def��abc �� def ��ƥ��
        [[:alpha:]]             # ����������ĸ���۴�Сд
        [[:lower:]]             # ��ʾСд��ĸ
        [[:upper:]]             # ��ʾ��д��ĸ
        [[:digit:]]             # ��ʾ�����ַ�
        [[:digit:][:lower:]]    # ��ʾ�����ַ���Сд��ĸ
```
##        Ԫ�ַ�{
```shell

            \d       # ƥ������һλ����
            \D       # ƥ�����ⵥ���������ַ�
            \w       # ƥ�����ⵥ����ĸ�����»����ַ���ͬ����� [:alnum:]
            \W       # ƥ��������͵��ַ�

```

##        �ַ���:�հ��ַ�{
```shell

            \s       # ƥ������Ŀհ׷�
            \S       # ƥ��ǿհ��ַ�
            \b       # ƥ�䵥�ʵĿ�ʼ�����
            \n       # ƥ�任�з�
            \r       # ƥ��س���
            \t       # ƥ���Ʊ��
            \b       # ƥ���˸��
            \0       # ƥ���ֵ�ַ�

    ```

##        �ַ���:ê���ַ�{
```shell

            \b       # ƥ���ֱ߽�(����[]��ʱ)
            \B       # ƥ����ֱ߽�
            \A       # ƥ���ַ�����ͷ
            \Z       # ƥ���ַ������е�ĩβ
            \z       # ֻƥ���ַ���ĩβ
            \G       # ƥ��ǰһ��m//g�뿪֮��

    ```

##        ����{
```shell

            (exp)                # ƥ��exp,�������ı����Զ�����������
            (?<name>exp)         # ƥ��exp,�������ı�������Ϊname�����Ҳ����д��(?'name'exp)
            (?:exp)              # ƥ��exp,������ƥ����ı���Ҳ�����˷���������

    ```

##        ������{
```shell

            (?=exp)              # ƥ��expǰ���λ��
            (?<=exp)             # ƥ��exp�����λ��
            (?!exp)              # ƥ�������Ĳ���exp��λ��
            (?<!exp)             # ƥ��ǰ�治��exp��λ��
            (?#comment)          # ע�Ͳ���������ʽ�Ĵ�������κ�Ӱ�죬����ע��

    ```

##        �����ַ�{
```shell

            http://en.wikipedia.org/wiki/Ascii_table
            ^H  \010 \b
            ^M  \015 \r
            ƥ�������ַ�: ctrl+V ctrl�����ڰ�H��M �������^H,����ƥ��

    ```

##    ���̽ṹ{
##        if�ж�{
```shell

            if [ $a == $b ]
            then
                echo "����"
            else
                echo "������"
            fi

```

##        case��֧ѡ��{
```shell

            case $xs in
            0) echo "0" ;;
            1) echo "1" ;;
            *) echo "����" ;;
            esac

    ```

##        whileѭ��{
```shell

            # while true  ��ͬ   while :
            # ���ļ�Ϊ���ж���
            num=1
            while [ $num -lt 10 ]
            do
            echo $num
            ((num=$num+2))
            done
            ###########################
            grep a  a.txt | while read a
            do
                echo $a
            done
            ###########################
            while read a
            do
                echo $a
            done < a.txt

    ```

##        forѭ��{
```shell

            # ���ļ��ѿո�ָ�
            w=`awk -F ":" '{print $1}' c`
            for d in $w
            do
                $d
            done
            ###########################
            for ((i=0;i<${#o[*]};i++))
            do
            echo ${o[$i]}
            done

    ```

##        untilѭ��{
```shell

            #  ��command��Ϊ0ʱѭ��
            until command
            do
                body
            done

    ```

##        ���̿���{
```shell

            break N     #  ��������ѭ��
            continue N  #  ��������ѭ����ѭ����������
            continue    #  ����ѭ����������

```

##    ����{
```shell

        A="a b c def"           # ���ַ������Ƹ�����
        A=`cmd`                 # ����������������
        A=$(cmd)                # ����������������
        eval a=\$$a             # ��ӵ���
        i=2&&echo $((i+3))      # ������ӡ�±������
        i=2&&echo $[i+3]        # ������ӡ�±������
        a=$((2>6?5:8))          # �ж�����ֵ���������ĸ�ֵ������
        $1  $2  $*              # λ�ò��� *��������
        env                     # �鿴��������
        env | grep "name"       # �鿴����Ļ�������
        set                     # �鿴���������ͱ��ر���
        read name               # �������
        readonly name           # ��name�����������Ϊֻ������,�������ٴ�����
        readonly                # �鿴ϵͳ���ڵ�ֻ���ļ�
        export name             # ����name�ɱ�����Ϊ����
        export name="RedHat"?  ?# ֱ�Ӷ���nameΪ��������
        export Stat$nu=2222     # �������ñ�����ֵ
        unset name              # �������
        export -n name          # ȥ��ֻ������
        shift                   # �����ƶ�λ�ñ���,����λ�ñ���,ʹ$3��ֵ����$2.$2��ֵ����$1
        name + 0                # ���ַ���ת��Ϊ����
        number " "              # ������ת�����ַ���
        a='ee';b='a';echo ${!b} # �������name������ֵ
        : ${a="cc"}             # ���a��ֵ�򲻸ı�,���a��ֵ��ֵa����Ϊcc
```
##        ����{
```shell

            A=(a b c def)         # ����������Ϊ���M
            ${#A[*]}              # �������
            ${A[*]}               # ��������Ԫ��,���ַ���
            ${A[@]}               # ��������Ԫ��,�����б�ɵ���
            ${A[2]}               # �ű���һ���������������λ

    ```

##        �����������{
```shell

            declare �� typeset
            -r ֻ��(readonlyһ��)
            -i ����
            -a ����
            -f ����
            -x export
            declare -i n=0

    ```

##        ϵͳ����{
```shell

            $0   #  �ű�������(����·��)
            $n   #  ��n������,n=1,2,��9
            $*   #  ���в����б�(�������ű�����)
            $@   #  ���в����б�(�����ַ���)
            $#   #  ��������(�������ű�����)
            $$   #  ��ǰ��ʽ��PID
            $!   #  ִ����һ��ָ���PID
            $?   #  ִ����һ��ָ��ķ���ֵ

    ```

##        �������ü���{
```shell

            ${name:+value}        # ���������name,�Ͱ�value��ʾ,δ������Ϊ��
            ${name:-value}        # ���������name,����ʾ��,δ���þ���ʾvalue
            ${name:?value}        # δ������ʾ�û�������Ϣvalue?
            ${name:=value}        # ��δ���þͰ�value���ò���ʾ<д�뱾����>
            ${#A}                 # �ɵõ��������ֽ�
            ${A:4:9}              # ȡ�����е�4λ������9λ
            ${A:(-1)}             # ����ȡ���һ���ַ�
            ${A/www/http}         # ȡ���������滻ÿ�е�һ���ؼ���
            ${A//www/http}        # ȡ��������ȫ���滻ÿ�йؼ���

            ������һ�������� file=/dir1/dir2/dir3/my.file.txt
            ${file#*/}     # ȥ����һ�� / ������ߵ��ִ���dir1/dir2/dir3/my.file.txt
            ${file##*/}    # ȥ�����һ�� / ������ߵ��ִ���my.file.txt
            ${file#*.}     # ȥ����һ�� .  ������ߵ��ִ���file.txt
            ${file##*.}    # ȥ�����һ�� .  ������ߵ��ִ���txt
            ${file%/*}     # ȥ������� / �����ұߵ��ִ���/dir1/dir2/dir3
            ${file%%/*}    # ȥ����һ�� / �����ұߵ��ִ���(��ֵ)
            ${file%.*}     # ȥ�����һ�� .  �����ұߵ��ִ���/dir1/dir2/dir3/my.file
            ${file%%.*}    # ȥ����һ�� .  �����ұߵ��ִ���/dir1/dir2/dir3/my
            #   # ��ȥ�����(�ڼ����� # �� $ ֮���)
            #   % ��ȥ���ұ�(�ڼ����� % �� $ ֮�ұ�)
            #   ��һ��������Сƥ��r�������������ƥ��

    ```

##    test�����ж�{
```shell

        # ���� [ ] ��ͬ  test����
```

##        expressionΪ�ַ�������{
```shell

            -n str   # �ַ���str�Ƿ�Ϊ��
            -z str   # �ַ���str�Ƿ�Ϊ��

```

##        expressionΪ�ļ�����{
```shell

            -a     # ���ң�������Ϊ��
            -b     # �Ƿ���ļ�
            -p     # �ļ��Ƿ�Ϊһ�������ܵ�
            -c     # �Ƿ��ַ��ļ�
            -r     # �ļ��Ƿ�ɶ�
            -d     # �Ƿ�һ��Ŀ¼
            -s     # �ļ��ĳ����Ƿ�Ϊ��
            -e     # �ļ��Ƿ����
            -S     # �Ƿ�Ϊ�׽����ļ�
            -f     # �Ƿ���ͨ�ļ�
            -x     # �ļ��Ƿ��ִ�У���Ϊ��
            -g     # �Ƿ��������ļ��� SGID λ
            -u     # �Ƿ��������ļ��� SUID λ
            -G     # �ļ��Ƿ�����ҹ��������
            -w     # �ļ��Ƿ��д����Ϊ��
            -k     # �ļ��Ƿ������˵�ճ��λ
            -t fd  # fd �Ƿ��Ǹ����ն������Ĵ򿪵��ļ���������fd Ĭ��Ϊ 1��
            -o     # ��һ������Ϊ��
            -O     # �ļ��Ƿ�����ҹ���û�����
            !      # ȡ��

    ```

##        expressionΪ��������{
```shell

            expr1 -a expr2   # ��� expr1 �� expr2 ����Ϊ�棬��Ϊ��
            expr1 -o expr2   # ��� expr1 �� expr2 ����Ϊ�棬��Ϊ��

    ```

##        ��ֵ�Ƚ�{
```shell

            ����     �ַ���
            -lt      <         # С��
            -gt      >         # ����
            -le      <=        # С�ڻ����
            -ge      >=        # ���ڻ����
            -eq      ==        # ����
            -ne      !=        # ������

        test 10 -lt 5       # �жϴ�С
        echo $?             # �鿴�Ͼ�test�����״̬  # ���0Ϊ��,1Ϊ��
        test -n "hello"     # �ж��ַ��������Ƿ�Ϊ0
        [ $? -eq 0 ] && echo "success" || exit������# �жϳɹ���ʾ,ʧ�����˳�

```

##    �ض���{
```shell

        #  ��׼��� stdout �� ��׼���� stderr  ��׼����stdin
        cmd 1> fiel              # �� ��׼��� �ض��� file �ļ���
        cmd > file 2>&1          # �� ��׼��� �� ��׼���� һ���ض��� file �ļ���
        cmd 2> file              # �� ��׼���� �ض��� file �ļ���
        cmd 2>> file             # �� ��׼���� �ض��� file �ļ���(׷��)
        cmd >> file 2>&1         # �� ��׼��� �� ��׼���� һ���ض��� file �ļ���(׷��)
        cmd < file >file2        # cmd ������ file �ļ���Ϊ stdin(��׼����)���� file2 �ļ���Ϊ ��׼���
        cat <>file               # �Զ�д�ķ�ʽ�� file
        cmd < file cmd           # ������ file �ļ���Ϊ stdin
        cmd << delimiter
        cmd; #�� stdin �ж��룬ֱ������ delimiter �ֽ��
delimiter

        >&n    # ʹ��ϵͳ���� dup (2) �����ļ������� n ���ѽ��������׼���
        <&n    # ��׼���븴�����ļ������� n
        <&-    # �رձ�׼���루���̣�
        >&-    # �رձ�׼���
        n<&-   # ��ʾ�� n ������ر�
        n>&-   # ��ʾ�� n ������ر�

```

##    �����{
```shell

        $[]��ͬ��$(())  # $[]��ʾ��ʽ����shell���������еı��ʽ��ֵ
        ~var            # ��λȡ�������,��var�����еĶ�����Ϊ1�ı�Ϊ0,Ϊ0�ı�Ϊ1
        var\<<str       # ���������,��var�еĶ�����λ�����ƶ�strλ,����������Ƴ��ĸ�λ,���Ҷ˵ĸ�λ�ϲ���0ֵ,ÿ��һ�ΰ�λ���ƾ���var��2
        var>>str?       # ���������,��var�����еĶ�����λ�����ƶ�strλ,���������Ƴ��ĸ�λ,����ĸ�λ�ϲ�0,ÿ����һ�����ƾ���ʵ��var����2
        var&str         # ��Ƚ������,var��str��Ӧλ,����ÿ����������˵,�������Ϊ1,���Ϊ1.����Ϊ0
        var^str         # ��������,�Ƚ�var��str��Ӧλ,���ڶ�������˵������߻���,���Ϊ1,����Ϊ0
        var|str         # �������,�Ƚ�var��str�Ķ�Ӧλ,����ÿ����������˵,�������λ��һ��1����1,���Ϊ1,����Ϊ0
```
##        ��������ȼ�{
```shell
            ����      �����                                  ˵��
            1      =,+=,-=,/=,%=,*=,&=,^=,|=,<<=,>>=      # ��ֵ�����
            2         ||                                  # �߼��� ǰ�治�ɹ�ִ��
            3         &&                                  # �߼��� ǰ��ɹ���ִ��
            4         |                                   # ��λ��
            5         ^                                   # ��λ���
            6         &                                   # ��λ��
            7         ==,!=                               # ����/������
            8         <=,>=,<,>                           # С�ڻ����/���ڻ����/С��/����
            9        \<<,>>                               # ��λ����/��λ���� (��ת�����)
            10        +,-                                 # �Ӽ�
            11        *,/,%                               # ��,��,ȡ��
            12        ! ,~                                # �߼���,��λȡ������
            13        -,+                                 # ����
    ```

##    ��ѧ����{
```shell

        $(( ))        # ��������
        + - * / **    # �քeΪ "�ӡ��p���ˡ�����������"
        & | ^ !       # �քeΪ "AND��OR��XOR��NOT" ����
        %             # ��������
```
##        let{
```shell

            let # ����
            let x=16/4
            let x=5**5

    ```

##        expr{
```shell

            expr 14 % 9                    # ��������
            SUM=`expr 2 \* 3`              # �˺�����ֵ������
            LOOP=`expr $LOOP + 1`          # ��������(��ѭ������) LOOP=0
            expr length "bkeep zbb"        # �����ִ�����
            expr substr "bkeep zbb" 4 9    # ץȡ�ִ�
            expr index "bkeep zbb" e       # ץȡ��һ���ַ����ִ����ֵ�λ��
            expr 30 / 3 / 2                # ��������пո�
            expr bkeep.doc : '.*'          # ģʽƥ��(����ʹ��exprͨ��ָ��ð��ѡ������ַ������ַ���)
            expr bkeep.doc : '\(.*\).doc'  # ��expr�п���ʹ���ַ���ƥ�����������ʹ��ģʽ��ȡ.doc�ļ�������
```
##            ��ֵ����{
```shell

                #�����ͼ�������������᷵�ش���
                rr=3.4
                expr $rr + 1
                expr: non-numeric argument
                rr=5
                expr $rr + 1
                6

        ```

##        bc{
```shell

            echo "m^n"|bc            # �η�����
            seq -s '+' 1000 |bc      # ��1�ӵ�1000
            seq 1 1000 |tr "\n" "+"|sed 's/+$/\n/'|bc   # ��1�ӵ�1000
    ```

##    grep{
```shell

        -c    # ��ʾƥ�䵽���е���Ŀ������ʾ����
        -h    # ����ʾ�ļ���
        -i    # ���Դ�Сд
        -l    # ֻ�г�ƥ���������ļ����ļ���
        -n    # ��ÿһ���м�������к�
        -s    # ��������ֻ��ʾ��������˳�״̬
        -v    # �������
        -e    # ʹ��������ʽ
        -w    # ��ȷƥ��
        -wc   # ��ȷƥ�����
        -o    # ��ѯ����ƥ���ֶ�
        -P    # ʹ��perl������ʽ
        -A3   # ��ӡƥ���к�������
        -B3   # ��ӡƥ���к�������
        -C3   # ��ӡƥ���к���������

        grep -v "a" txt                              # ���˹ؼ��ַ���
        grep -w 'a\>' txt                            # ��ȷƥ���ַ���
        grep -i "a" txt                              # ��Сд����
        grep  "a[bB]" txt                            # ͬʱƥ���Сд
        grep '[0-9]\{3\}' txt                        # ����0-9�ظ����ε�������
        grep -E "word1|word2|word3"   file           # ��������ƥ��
        grep word1 file | grep word2 |grep word3     # ͬʱƥ������
        echo quan@163.com |grep -Po '(?<=@.).*(?=.$)'                           # �����Խ�ȡ�ַ���  #��63.co
        echo "I'm singing while you're dancing" |grep -Po '\b\w+(?=ing\b)'      # ������ƥ��
        echo 'Rx Optical Power: -5.01dBm, Tx Optical Power: -2.41dBm' |grep -Po '(?<=:).*?(?=d)'           # ȡ��dǰ������ # ?Ϊ��Сƥ��
        echo 'Rx Optical Power: -5.01dBm, Tx Optical Power: -2.41dBm' | grep -Po '[-0-9.]+'                # ȡ��dǰ������ # ?Ϊ��Сƥ��
        echo '["mem",ok],["hardware",false],["filesystem",false]' |grep -Po '[^"]+(?=",false)'             # ȡ��falseǰ�����ĸ
        echo '["mem",ok],["hardware",false],["filesystem",false]' |grep -Po '\w+",false'|grep -Po '^\w+'   # ȡ��falseǰ�����ĸ
```
##        grep����if�ж�{
```shell

            if echo abc | grep "a"  > /dev/null 2>&1
            then
                echo "abc"
            else
                echo "null"
            fi

    ```

##    tr{
```shell

        -c          # ���ַ���1���ַ����Ĳ����滻���ַ�����Ҫ���ַ���ΪASCII
        -d          # ɾ���ַ���1�����������ַ�
        -s          # ɾ�������ظ������ַ����У�ֻ������һ��:�����ظ������ַ���ѹ��Ϊһ���ַ���
        [a-z]       # a-z�ڵ��ַ���ɵ��ַ���
        [A-Z]       # A-Z�ڵ��ַ���ɵ��ַ���
        [0-9]       # ���ִ�
        \octal      # һ����λ�İ˽���������Ӧ��Ч��ASCII�ַ�
        [O*n]       # ��ʾ�ַ�O�ظ�����ָ������n�����[O*2]ƥ��OO���ַ���
```
##        tr���ض������ַ���﷽ʽ{
```shell

            \a Ctrl-G    \007    # ����
            \b Ctrl-H    \010    # �˸��
            \f Ctrl-L    \014    # ���л�ҳ
            \n Ctrl-J    \012    # ����
            \r Ctrl-M    \015    # �س�
            \t Ctrl-I    \011    # tab��
            \v Ctrl-X    \030

        tr A-Z a-z                             # �����д�дת����Сд��ĸ
        tr " " "\n"                            # ���ո��滻Ϊ����
        tr -s "[\012]" < plan.txt              # ɾ������
        tr -s ["\n"] < plan.txt                # ɾ������
        tr -s "[\015]" "[\n]" < file           # ɾ���ļ��е�^M������֮�Ի���
        tr -s "[\r]" "[\n]" < file             # ɾ���ļ��е�^M������֮�Ի���
        tr -s "[:]" "[\011]" < /etc/passwd     # �滻passwd�ļ�������ð�ţ���֮��tab��
        tr -s "[:]" "[\t]" < /etc/passwd       # �滻passwd�ļ�������ð�ţ���֮��tab��
        echo $PATH | tr ":" "\n"               # ������ʾ·���ɶ���
        1,$!tr -d '\t'                         # tr��vi��ʹ�ã���trǰ�Ӵ����з�Χ�͸�̾��('$'��ʾ���һ��)
        tr "\r" "\n"<macfile > unixfile        # Mac -> UNIX
        tr "\n" "\r"<unixfile > macfile        # UNIX -> Mac
        tr -d "\r"<dosfile > unixfile          # DOS -> UNIX  Microsoft DOS/Windows Լ�����ı���ÿ���Իس��ַ�(\r)��������з�(\n)����
        awk '{ print $0"\r" }'<unixfile > dosfile   # UNIX -> DOS������������£���Ҫ��awk����Ϊtr���ܲ��������ַ����滻һ���ַ�

```

##    seq{
```shell

        # ��ָ����ʼ��ֵ����Ĭ��Ϊ 1
        -s   # ѡ����Ҫ�ı�����ķָ��, Ԥ���� \n
        -w   # ��λ��ȫ�����ǿ����ȣ������ǰ�油 0
        -f   # ��ʽ�����������ָ����ӡ�ĸ�ʽ

        seq 10 100               # �г�10-100
        seq 1 10 |tac            # �����г�
        seq -s '+' 90 100 |bc    # ��90�ӵ�100
        seq -f 'dir%g' 1 10 | xargs mkdir     # ����dir1-10
        seq -f 'dir%03g' 1 10 | xargs mkdir   # ����dir001-010

```

##    trap{
```shell

        �ź�         ˵��
        HUP(1)     # ����ͨ�����ն˵��߻��û��˳�������
        INT(2)     # �жϣ�ͨ������Ctrl+C��ϼ�������
        QUIT(3)    # �˳���ͨ������Ctrl+\��ϼ�������
        ABRT(6)    # ��ֹ��ͨ����ĳЩ���ص�ִ�д��������
        ALRM(14)   # ������ͨ����������ʱ
        TERM(15)   # ��ֹ��ͨ����ϵͳ�ػ�ʱ����

        trap��׽���ź�֮�󣬿��������ַ�Ӧ��ʽ��
            1��ִ��һ�γ�����������һ�ź�
            2�������źŵ�Ĭ�ϲ���
            3��������һ�ź�

        ��һ����ʽ��trap������shell���յ� signal list �嵥����ֵ��ͬ���ź�ʱ����ִ��˫�����е������
        trap 'commands' signal-list   # �����ţ�Ҫ��shell̽�⵽�ź�����ʱ���ִ������ͱ������滻��ʱ��һֱ��
        trap "commands" signal-list   # ˫���ţ�shell��һ�������źŵ�ʱ���ִ������ͱ������滻��ʱ�䲻��

```

##    awk{
```shell

        # Ĭ����ִ�д�ӡȫ�� print $0
        # 1Ϊ�� ��ӡ$0
        # 0Ϊ�� ����ӡ

        -F   # �ı�FSֵ(�ָ���)
        ~    # ��ƥ��
        ==   # ����ƥ��
        !~   # ƥ�䲻����
        =    # ��ֵ
        !=   # ������
        +=   # ����

        \b   # �˸�
        \f   # ��ҳ
        \n   # ����
        \r   # �س�
        \t   # �Ʊ��Tab
        \c   # ������һ�����ַ�

        -F"[ ]+|[%]+"  # ����ո����%Ϊ�ָ���
        [a-z]+         # ���Сд��ĸ
        [a-Z]          # �������д�Сд��ĸ(aAbB...zZ)
        [a-z]          # �������д�Сд��ĸ(ab...z)
        [:alnum:]      # ��ĸ�����ַ�
        [:alpha:]      # ��ĸ�ַ�
        [:cntrl:]      # �����ַ�
        [:digit:]      # �����ַ�
        [:graph:]      # �ǿհ��ַ�(�ǿո񡢿����ַ���)
        [:lower:]      # Сд��ĸ
        [:print:]      # ��[:graph:]���ƣ����ǰ����ո��ַ�
        [:punct:]      # ����ַ�
        [:space:]      # ���еĿհ��ַ�(���з����ո��Ʊ��)
        [:upper:]      # ��д��ĸ
        [:xdigit:]     # ʮ�����Ƶ�����(0-9a-fA-F)
        [[:digit:][:lower:]]    # ���ֺ�Сд��ĸ(ռһ���ַ�)

```
##        �ڽ�����{
```shell
            $n            # ��ǰ��¼�ĵ� n ���ֶΣ��ֶμ��� FS �ָ�
            $0            # �����������¼
            ARGC          # �����в�������Ŀ
            ARGIND        # �������е�ǰ�ļ���λ�� ( �� 0 ��ʼ�� )
            ARGV          # ���������в���������
            CONVFMT       # ����ת����ʽ ( Ĭ��ֵΪ %.6g)
            ENVIRON       # ����������������
            ERRNO         # ���һ��ϵͳ���������
            FIELDWIDTHS   # �ֶο���б� ( �ÿո���ָ� )
            FILENAME      # ��ǰ�ļ���
            FNR           # ͬ NR ��������ڵ�ǰ�ļ�
            FS            # �ֶηָ��� ( Ĭ�����κοո� )
            IGNORECASE    # ���Ϊ�棨���� 0 ֵ��������к��Դ�Сд��ƥ��
            NF            # ��ǰ��¼�е��ֶ���(��)
            NR            # ��ǰ����
            OFMT          # ���ֵ������ʽ ( Ĭ��ֵ�� %.6g)
            OFS           # ����ֶηָ��� ( Ĭ��ֵ��һ���ո� )
            ORS           # �����¼�ָ��� ( Ĭ��ֵ��һ�����з� )
            RLENGTH       # �� match ������ƥ����ַ����ĳ���
            RS            # ��¼�ָ��� ( Ĭ����һ�����з� )
            RSTART        # �� match ������ƥ����ַ����ĵ�һ��λ��
            SUBSEP        # �����±�ָ��� ( Ĭ��ֵ�� /034)
            BEGIN         # �ȴ���(�ɲ����ļ�����)
            END           # ����ʱ����
    ```

##        ���ú���{
```shell
            gsub(r,s)          # ������$0����s���r   �൱�� sed 's///g'
            gsub(r,s,t)        # ������t����s���r
            index(s,t)         # ����s���ַ���t�ĵ�һλ��
            length(s)          # ����s����
            match(s,r)         # ����s�Ƿ����ƥ��r���ַ���
            split(s,a,fs)      # ��fs�Ͻ�s�ֳ�����a
            sprint(fmt,exp)    # ���ؾ�fmt��ʽ�����exp
            sub(r,s)           # ��$0�����������Ӵ�����s   �൱�� sed 's///'
            substr(s,p)        # �����ַ���s�д�p��ʼ�ĺ�׺����
            substr(s,p,n)      # �����ַ���s�д�p��ʼ����Ϊn�ĺ�׺����
    ```

##        awk�ж�{
```shell
            awk '{print ($1>$2)?"��һ��"$1:"�ڶ���"$2}'      # �����ж� ���Ŵ���if����ж� "?"����then ":"����else
            awk '{max=($1>$2)? $1 : $2; print max}'          # �����ж� ���$1����$2,maxֵΪΪ$1,����Ϊ$2
            awk '{if ( $6 > 50) print $1 " Too high" ;\
            else print "Range is OK"}' file
            awk '{if ( $6 > 50) { count++;print $3 } \
            else { x+5; print $2 } }' file
    ```

##        awkѭ��{
```shell
            awk '{i = 1; while ( i <= NF ) { print NF, $i ; i++ } }' file
            awk '{ for ( i = 1; i <= NF; i++ ) print NF,$i }' file

        awk '/Tom/' file               # ��ӡƥ�䵽����
        awk '/^Tom/{print $1}'         # ƥ��Tom��ͷ���� ��ӡ��һ���ֶ�
        awk '$1 !~ /ly$/'              # ��ʾ���е�һ���ֶβ�����ly��β����
        awk '$3 <40'                   # ����������ֶ�ֵС��40�Ŵ�ӡ
        awk '$4==90{print $5}'         # ȡ�������е���90�ĵ�����
        awk '/^(no|so)/' test          # ��ӡ������ģʽno��so��ͷ����
        awk '$3 * $4 > 500'            # ��������(�������ֶκ͵��ĸ��ֶγ˻�����500����ʾ)
        awk '{print NR" "$0}'          # ���к�
        awk '/tom/,/suz/'              # ��ӡtom��suz֮�����
        awk '{a+=$1}END{print a}'      # �����
        awk 'sum+=$1{print sum}'       # ��$1��ֵ���Ӻ󸳸�sum
        awk '{a+=$1}END{print a/NR}'   # ����ƽ��ֵ
        awk '!s[$1 $3]++' file         # ���ݵ�һ�к͵����й����ظ���
        awk -F'[ :\t]' '{print $1,$2}'           # �Կո�:���Ʊ��TabΪ�ָ���
        awk '{print "'"$a"'","'"$b"'"}'          # �����ⲿ����
        awk '{if(NR==52){print;exit}}'           # ��ʾ��52��
        awk '/�ؼ���/{a=NR+2}a==NR {print}'      # ȡ�ؼ����µڼ���
        awk 'gsub(/liu/,"aaaa",$1){print $0}'    # ֻ��ӡƥ���滻�����
        ll | awk -F'[ ]+|[ ][ ]+' '/^$/{print $8}'             # ��ȡʱ��,�ո񲻹̶�
        awk '{$1="";$2="";$3="";print}'                        # ȥ��ǰ����
        echo aada:aba|awk '/d/||/b/{print}'                    # ƥ��������֮һ
        echo aada:abaa|awk -F: '$1~/d/||$2~/b/{print}'         # �ؼ���ƥ��������֮һ
        echo Ma asdas|awk '$1~/^[a-Z][a-Z]$/{print }'          # ��һ����ƥ������
        echo aada:aaba|awk '/d/&&/b/{print}'                   # ͬʱƥ��������
        awk 'length($1)=="4"{print $1}'                        # �ַ���λ��
        awk '{if($2>3){system ("touch "$1)}}'                  # ִ��ϵͳ����
        awk '{sub(/Mac/,"Macintosh",$0);print}'                # ��Macintosh�滻Mac
        awk '{gsub(/Mac/,"MacIntosh",$1); print}'              # ��һ��������Macintosh�滻Mac
        awk -F '' '{ for(i=1;i<NF+1;i++)a+=$i  ;print a}'      # ��λ�������ÿλ�����ܺ�.���� 1234�� �õ� 10
        awk '{ i=$1%10;if ( i == 0 ) {print i}}'               # �ж�$1�Ƿ�����(awk�ж����������ʱ���ܴ� $ )
        awk 'BEGIN{a=0}{if ($1>a) a=$1 fi}END{print a}'        # �������ֵ  �趨һ��������ʼΪ0�������ȸ������ֵ���͸�ֵ���ñ�����ֱ������
        awk 'BEGIN{a=11111}{if ($1<a) a=$1 fi}END{print a}'    # ����Сֵ
        awk '{if(A)print;A=0}/regexp/{A=1}'                    # �����ַ�������ƥ���е���һ����ʾ��������������ʾƥ����
        awk '/regexp/{print A}{A=$0}'                          # �����ַ�������ƥ���е���һ����ʾ��������������ʾƥ����
        awk '{if(!/mysql/)gsub(/1/,"a");print $0}'             # ��1�滻��a������ֻ������δ�����ִ�mysql��������滻
        awk 'BEGIN{srand();fr=int(100*rand());print fr;}'      # ��ȡ�����
        awk '{if(NR==3)F=1}{if(F){i++;if(i%7==1)print}}'       # �ӵ�3�п�ʼ��ÿ7����ʾһ��
        awk '{if(NF<1){print i;i=0} else {i++;print $0}}'      # ��ʾ���зָ���ε�����
        echo +null:null  |awk -F: '$1!~"^+"&&$2!="null"{print $0}'       # �ؼ���ͬʱƥ��
        awk -v RS=@ 'NF{for(i=1;i<=NF;i++)if($i) printf $i;print ""}'    # ָ����¼�ָ���
        awk '{b[$1]=b[$1]$2}END{for(i in b){print i,b[i]}}'              # �е���
        awk '{ i=($1%100);if ( $i >= 0 ) {print $0,$i}}'                 # ������
        awk '{b=a;a=$1; if(NR>1){print a-b}}'                            # ��ǰ�м���һ��
        awk '{a[NR]=$1}END{for (i=1;i<=NR;i++){print a[i]-a[i-1]}}'      # ��ǰ�м���һ��
        awk -F: '{name[x++]=$1};END{for(i=0;i<NR;i++)print i,name[i]}'   # ENDֻ��ӡ���Ľ��,END�����洦����������
        awk '{sum2+=$2;count=count+1}END{print sum2,sum2/count}'         # $2���ܺ�  $2�ܺͳ�����(ƽ��ֵ)
        awk -v a=0 -F 'B' '{for (i=1;i<NF;i++){ a=a+length($i)+1;print a  }}'     # ��ӡ����B������λ��
        awk 'BEGIN{ "date" | getline d; split(d,mon) ; print mon[2]}' file        # ��dateֵ����d������d����Ϊ����mon����ӡmon�����е�2��Ԫ��
        awk 'BEGIN{info="this is a test2010test!";print substr(info,4,10);}'      # ��ȡ�ַ���(substrʹ��)
        awk 'BEGIN{info="this is a test2010test!";print index(info,"test")?"ok":"no found";}'      # ƥ���ַ���(indexʹ��)
        awk 'BEGIN{info="this is a test2010test!";print match(info,/[0-9]+/)?"ok":"no found";}'    # ������ʽƥ�����(matchʹ��)
        awk '{for(i=1;i<=4;i++)printf $i""FS; for(y=10;y<=13;y++)  printf $y""FS;print ""}'        # ��ӡǰ4�кͺ�4��
        awk 'BEGIN{for(n=0;n++<9;){for(i=0;i++<n;)printf i"x"n"="i*n" ";print ""}}'                # �˷��ھ�
        awk 'BEGIN{info="this is a test";split(info,tA," ");print length(tA);for(k in tA){print k,tA[k];}}'             # �ַ����ָ�(splitʹ��)
        awk '{if (system ("grep "$2" tmp/* > /dev/null 2>&1") == 0 ) {print $1,"Y"} else {print $1,"N"} }' a            # ִ��ϵͳ�����жϷ���״̬
        awk  '{for(i=1;i<=NF;i++) a[i,NR]=$i}END{for(i=1;i<=NF;i++) {for(j=1;j<=NR;j++) printf a[i,j] " ";print ""}}'   # ������ת����
        netstat -an|awk -v A=$IP -v B=$PORT 'BEGIN{print "Clients\tGuest_ip"}$4~A":"B{split($5,ip,":");a[ip[1]]++}END{for(i in a)print a[i]"\t"i|"sort -nr"}'    # ͳ��IP���Ӹ���
        cat 1.txt|awk -F" # " '{print "insert into user (user,password,email)values(""'\''"$1"'\'\,'""'\''"$2"'\'\,'""'\''"$3"'\'\)\;'"}' >>insert_1.txt     # ����sql���
        awk 'BEGIN{printf "what is your name?";getline name < "/dev/tty" } $1 ~name {print "FOUND" name " on line ", NR "."} END{print "see you," name "."}' file  # ���ļ�ƥ��
```
##        ȡ����IP{
```shell
            /sbin/ifconfig |awk -v RS="Bcast:" '{print $NF}'|awk -F: '/addr/{print $2}'
            /sbin/ifconfig |awk '/inet/&&$2!~"127.0.0.1"{split($2,a,":");print a[2]}'
            /sbin/ifconfig |awk -v RS='inet addr:' '$1!="eth0"&&$1!="127.0.0.1"{print $1}'|awk '{printf"%s|",$0}'
            /sbin/ifconfig |awk  '{printf("line %d,%s\n",NR,$0)}'         # ָ������(%d����,%s�ַ�)
    ```

##        �鿴���̿ռ�{
```shell
            df -h|awk -F"[ ]+|%" '$5>14{print $5}'
            df -h|awk 'NR!=1{if ( NF == 6 ) {print $5} else if ( NF == 5) {print $4} }'
            df -h|awk 'NR!=1 && /%/{sub(/%/,"");print $(NF-1)}'
            df -h|sed '1d;/ /!N;s/\n//;s/ \+/ /;'    #�����̷��������һ��   ��ֱ���� df -P
    ```

##        ���д�ӡ{
```shell
            awk 'END{printf "%-10s%-10s\n%-10s%-10s\n%-10s%-10s\n","server","name","123","12345","234","1234"}' txt
            awk 'BEGIN{printf "|%-10s|%-10s|\n|%-10s|%-10s|\n|%-10s|%-10s|\n","server","name","123","12345","234","1234"}'
            awk 'BEGIN{

            print "   *** �� ʼ ***   ";
            print "+-----------------+";
            printf "|%-5s|%-5s|%-5s|\n","id","name","ip";
           }
            $1!=1 && NF==4{printf "|%-5s|%-5s|%-5s|\n",$1,$2,$3" "$11}
            END{
            print "+-----------------+";
            print "   *** �� �� ***   "
        ' txt
    ```

##        awk������{
```shell
            ����ͼƬ������־������־��ÿ��ͼƬ���ʴ���*ͼƬ��С���ܺͣ����У�Ҳ���Ǽ���ÿ��url���ܷ��ʴ�С
            ˵����������������Ӧ�ã�������ܿ�������IDC��վ��������ܸߣ�Ȼ��ͨ��������������־��ЩԪ��ռ���������󣬽��������Ż���ü���ͼƬ��ѹ��js�ȴ�ʩ��
            ������Ҫ�������ָ�꣺ �������ʴ�����    �����ʴ���*�����������ļ���С��   ���ļ�������URL����
            ��������
            59.33.26.105 - - [08/Dec/2010:15:43:56 +0800] "GET /static/images/photos/2.jpg HTTP/1.1" 200 11299

            awk '{array_num[$7]++;array_size[$7]+=$10}END{for(i in array_num) {print array_num[i]" "array_size[i]" "i}}'
    ```

##        awk��ϰ��{
```shell

            wang     4
            cui      3
            zhao     4
            liu      3
            liu      3
            chang    5
            li       2

            1 ͨ����һ�����ҳ��ַ�����Ϊ4��
            2 ���ڶ���ֵ����3ʱ�������հ��ļ����ļ���Ϊ��ǰ�е�һ����$1 (touch $1)
            3 ���ĵ��� liu �ַ����滻Ϊ hong
            4 ��ڶ��еĺ�
            5 ��ڶ��е�ƽ��ֵ
            6 ��ڶ����е����ֵ
            7 ����һ�й����ظ����г�ÿһ�ÿһ��ĳ��ִ�����ÿһ��Ĵ�С�ܺ�

            1���ַ�������
                awk 'length($1)=="4"{print $1}'
            2��ִ��ϵͳ����
                awk '{if($2>3){system ("touch "$1)}}'
            3��gsub(/r/,"s",��) ��ָ����(Ĭ��$0)����s���r  (sed 's///g')
                awk '{gsub(/liu/,"hong",$1);print $0}' a.txt
            4�������
                awk '{a+=$2}END{print a}'
            5������ƽ��ֵ
                awk '{a+=$2}END{print a/NR}'
                awk '{a+=$2;b++}END{print a,a/b}'
            6���������ֵ
                awk 'BEGIN{a=0}{if($2>a) a=$2 }END{print a}'
            7������һ�й����ظ��г�ÿһ�ÿһ��ĳ��ִ�����ÿһ��Ĵ�С�ܺ�
                awk '{a[$1]++;b[$1]+=$2}END{for(i in a){print i,a[i],b[i]}}'
    ```

##        awk��������־{
```shell
            6.19��
            DHB_014_�Ű��ܻ�����ҵ���ձ������� �������쳣��
            DHB_023_�Ű�©�������ձ����麣 �������쳣��
            6.20��
            DHB_014_�Ű��ܻ�����ҵ���ձ������� �������쳣����

            awk -F '[_ ��]+' 'NF>2{print $4,$1"_"$2,b |"sort";next}{b=$1}'

            # ��ǰ��NFС�ڵ���2 ֻ���{print $4,$1"_"$2,b |"sort";next} ��Ч �� 6.19���������˲���,  {b=$1} ��Ȼִ��
            # ��ǰ��NF����2 ִ�е� next ǿ���������У������������ {b=$1}

            ���� DHB_014 6.19
    ```

##    sed{
```shell

        # �ȶ�ȡ���ϡ�����ģʽ�ռ䡢������б༭���������������һ���滻ģʽ�ռ�����
        # ���Թ���sedsed (���� -d)   http://aurelio.net/sedsed/sedsed-1.0

        -n   # ����ɱ༭ָ�����(ȡ��Ĭ�ϵ����,������༭ָ��һ�����)
        -i   # ֱ�Ӷ��ļ�����
        -e   # ���ر༭
        -r   # ����ɲ�ת�������ַ�

        b    # ����ƥ�����
        p    # ��ӡ
        d    # ɾ��
        s    # �滻
        g    # ���sȫ���滻
        i    # ��ǰ����
        a    # �к����
        r    # ��
        y    # ת��
        q    # �˳�

        &    # ������ҵĴ�����
        *    # ������ ǰ���ַ�(ǰ����)
        ?    # 0��1�� ��Сƥ�� û��-r������ת�� \?
        $    # ���һ��
        .*   # ƥ���������ַ�
        \(a\)   # ����a��Ϊ��ǩ1(\1)
```
##        ģʽ�ռ�{
```shell

            # ģʽ�ռ�(�������д���) ģʽƥ��ķ�Χ��һ����ԣ�ģʽ�ռ��������ı���ĳһ�У����ǿ���ͨ��ʹ��N�����Ѷ���һ�ж���ģʽ�ռ�
            # �ݴ�ռ���Ĭ�ϴ洢һ������
            n   # ������һ��(������һ��)
            h   # ��ģʽ�ռ�����п������ݴ�ռ�
            H   # ��ģʽ�ռ������׷�ӵ��ݴ�ռ�
            g   # ���ݴ�ռ�������滻ģʽ�ռ����
            G   # ���ݴ�ռ������׷�ӵ�ģʽ�ռ���к�
            x   # ���ݴ�ռ��������ģʽ�ռ���ĵ�ǰ�л���
            ��  # ����ǰ���Ҫƥ��ķ�Χȡ��
            D   # ɾ����ǰģʽ�ռ���ֱ����������һ�����з��������ַ�(/.*/ƥ��ģʽ�ռ����������ݣ�ƥ�䵽��ִ��D,ûƥ�䵽�ͽ���D)
            N   # ׷����һ�������е�ģʽ�ռ���沢�ڵڶ��߼�Ƕ��һ�����з����ı䵱ǰ�к���,ģʽƥ�����������������Ƕ����
            p   # ��ӡģʽ�ռ��е�ֱ����������һ�����е������ַ�

    ```

##        ��ǩ����{
```shell

            : lable # ���������ǣ����b��t����ʹ����ת
            b lable # ��֧���ű��д��б�ǵĵط��������֧���������֧���ű���ĩβ��
            t labe  # �жϷ�֧�������һ�п�ʼ������һ���������T,t��������·�֧�����б�ŵ�����������ߵ��ű�ĩβ����b������ͬ����t��ִ����תǰ���ȼ����ǰһ���滻�����Ƿ�ɹ�����ɹ�����ִ����ת��

            sed -e '{:p1;/A/s/A/AA/;/B/s/B/BB/;/[AB]\{10\}/b;b p1;}'     # �ļ����ݵ�һ��A�ڶ���B:������ǩp1;�����滻����(A�滻��AA,B�滻��BB)��A����B�ﵽ10���Ժ����b,����
            echo 'sd  f   f   [a    b      c    cddd    eee]' | sed ':n;s#\(\[[^ ]*\)  *#\1#;tn'  # ��ǩ����tʹ�÷���,�滻[]��Ŀո�
            echo "198723124.03"|sed -r ':a;s/([0-9]+)([0-9]{3})/\1,\2/;ta'  # ÿ�����ַ���һ������

    ```

##        �����ⲿ����{
```shell

            sed -n ''$a',10p'
            sed -n ""$a",10p"

        sed 10q                                       # ��ʾ�ļ��е�ǰ10�� (ģ��"head")
        sed -n '$='                                   # ��������(ģ�� "wc -l")
        sed -n '5,/^no/p'                             # ��ӡ�ӵ�5�е���no��ͷ��֮���������
        sed -i "/^$f/d" a     ����                  �� # ɾ��ƥ����
        sed -i '/aaa/,$d'                             # ɾ��ƥ���е�ĩβ
        sed -i "s/=/:/" c                             # ֱ�Ӷ��ı��滻
        sed -i "/^pearls/s/$/j/"                      # �ҵ�pearls��ͷ����β��j
        sed '/1/,/3/p' file                           # ��ӡ1��3֮�����
        sed -n '1p' file                              # ȡ��ָ����
        sed '5i\aaa' file                             # �ڵ�5��֮ǰ������
        sed '5a\aaa' file                             # �ڵ�5��֮�������
        echo a|sed -e '/a/i\b'                        # ��ƥ����ǰ����һ��
        echo a|sed -e '/a/a\b'                        # ��ƥ���к����һ��
        echo a|sed 's/a/&\nb/g'                       # ��ƥ���к����һ��
        seq 10| sed -e{1,3}'s/./a/'                   # ƥ��1��3���滻
        sed -n '/regexp/!p'                           # ֻ��ʾ��ƥ��������ʽ����
        sed '/regexp/d'                               # ֻ��ʾ��ƥ��������ʽ����
        sed '$!N;s/\n//'                              # ��ÿ�������ӳ�һ��
        sed '/baz/s/foo/bar/g'                        # ֻ�����г����ִ�"baz"������½�"foo"�滻��"bar"
        sed '/baz/!s/foo/bar/g'                       # ��"foo"�滻��"bar"������ֻ������δ�����ִ�"baz"��������滻
        echo a|sed -e 's/a/#&/g'                      # ��aǰ���#��
        sed 's/foo/bar/4'                             # ֻ�滻ÿһ���еĵ��ĸ��ִ�
        sed 's/\(.*\)foo/\1bar/'                      # �滻ÿ�����һ���ַ���
        sed 's/\(.*\)foo\(.*foo\)/\1bar\2/'           # �滻�����ڶ����ַ���
        sed 's/[0-9][0-9]$/&5'                        # ����[0-9][0-9]��β���к��5
        sed -n ' /^eth\|em[01][^:]/{n;p;}'            # ƥ�����ؼ���
        sed -n -r ' /eth|em[01][^:]/{n;p;}'           # ƥ�����ؼ���
        echo -e "1\n2"|xargs -i -t sed 's/^/1/' {}    # ͬʱ�������ļ�
        sed '/west/,/east/s/$/*VACA*/'                # �޸�west��east֮��������У��ڽ�β����*VACA*
        sed  's/[^1-9]*\([0-9]\+\).*/\1/'             # ȡ����һ�����֣����Һ��Ե���ͷ��0
        sed -n '/regexp/{g;1!p;};h'                   # �����ַ�������ƥ���е���һ����ʾ��������������ʾƥ����
        sed -n ' /regexp/{n;p;}'                      # �����ַ�������ƥ���е���һ����ʾ��������������ʾƥ����
        sed -n 's/\(mar\)got/\1ianne/p'               # ����\(mar\)��Ϊ��ǩ1
        sed -n 's/\([0-9]\+\).*\(t\)/\2\1/p'          # ��������ǩ
        sed -i -e '1,3d' -e 's/1/2/'                  # ���ر༭(��ɾ��1-3�У��ڽ�1�滻��2)
        sed -e 's/@.*//g' -e '/^$/d'                  # ɾ����@���������ַ����Ϳ���
        sed -n -e "{s/^ *[0-9]*//p}"                  # ��ӡ��ɾ��������ʽ���ǲ�������
        echo abcd|sed 'y/bd/BE/'                      # ƥ���ַ��滻
        sed '/^#/b;y/y/P/' 2                          # ��#�ſ�ͷ�����滻�ַ�
        sed '/suan/r readfile'                        # �ҵ���suan���У��ں�����϶�����ļ�����
        sed -n '/no/w writefile'                      # �ҵ���no���У�д�뵽ָ���ļ���
        sed '/regex/G'                                # ��ƥ��ʽ����֮�����һ����
        sed '/regex/{x;p;x;G;}'                       # ��ƥ��ʽ����֮ǰ��֮�������һ����
        sed 'n;d'                                     # ɾ������ż����
        sed 'G;G'                                     # ��ÿһ�к�������������
        sed '/^$/d;G'                                 # ��������ı���ÿһ�к��潫����ֻ��һ����
        sed 'n;n;n;n;G;'                              # ��ÿ5�к�����һ�հ���
        sed -n '5~5p'                                 # ֻ��ӡ�к�Ϊ5�ı���
        seq 1 30|sed  '5~5s/.*/a/'                    # ������ִ���滻
        sed -n '3,${p;n;n;n;n;n;n;}'                  # �ӵ�3�п�ʼ��ÿ7����ʾһ��
        sed -n 'h;n;G;p'                              # ��ż����
        seq 1 10|sed '1!G;h;$!d'                      # ��������
        ls -l|sed -n '/^.rwx.*/p'                     # ��������Ȩ��Ϊ7���ļ�
        sed = filename | sed 'N;s/\n/\t/'             # Ϊ�ļ��е�ÿһ�н��б��(�򵥵�����뷽ʽ)
        sed 's/^[ \t]*//'                             # ��ÿһ��ǰ����"�հ��ַ�"(�ո��Ʊ��)ɾ��,ʹ֮�����
        sed 's/^[ \t]*//;s/[ \t]*$//'                 # ��ÿһ���е�ǰ������β�Ŀհ��ַ�ɾ��
        sed '/{abc,def\}\/\[111,222]/s/^/00000/'      # ƥ����Ҫת�е��ַ�: } / [
        echo abcd\\nabcde |sed 's/\\n/@/g' |tr '@' '\n'        # �����з�ת��Ϊ����
        cat tmp|awk '{print $1}'|sort -n|sed -n '$p'           # ȡһ�����ֵ
        sed -n '{s/^[^\/]*//;s/\:.*//;p}' /etc/passwd          # ȡ�û���Ŀ¼(ƥ�䲻Ϊ/���ַ���ƥ��:����β���ַ�ȫ��ɾ��)
        sed = filename | sed 'N;s/^/      /; s/ *\(.\{6,\}\)\n/\1   /'   # ���ļ��е������б��(�к����������Ҷ˶���)
        /sbin/ifconfig |sed 's/.*inet addr:\(.*\) Bca.*/\1/g' |sed -n '/eth/{n;p}'   # ȡ����IP
```
##        �޸�keepalive�����޳���˷�����{
```shell

            sed -i '/real_server.*10.0.1.158.*8888/,+8 s/^/#/' keepalived.conf
            sed -i '/real_server.*10.0.1.158.*8888/,+8 s/^#//' keepalived.conf

    ```

##        ģ��rev����{
```shell

            echo 123 |sed '/\n/!G;s/\(.\)\(.*\n\)/&\2\1/;//D;s/.//;'
            /\n/!G;         ������������# û��\n���з���Ҫִ��G,��Ϊ�����ռ���Ϊ�գ�������ģʽ�ռ�׷��һ����
            s/\(.\)\(.*\n\)/&\2\1/;     # ��ǩ�滻 &\n23\n1$ (�ؼ�����& ,�����ú���//ƥ�䵽����)
            //D;            ������������# D ���������ѭ��ɾ��ģʽ�ռ��еĵ�һ���֣����ɾ����ģʽ�ռ��л���ʣ���У��򷵻� D ֮ǰ���������ִ�У���� D ��ģʽ�ռ���û���κ����ݣ����˳���  //D ƥ�����ִ��D,����Ͼ�sû��ƥ�䵽,//Ҳ�޷�ƥ�䵽����, "//D;"�������
            s/.//;          ������������# D������,ɾ����ͷ�� \n

    ```

##    xargs{
```shell

        # �����滻
        -t �ȴ�ӡ���Ȼ����ִ��
        -i ��ÿ���滻 {}
        find / -perm +7000 | xargs ls -l                    # ��ǰ������ݣ���Ϊ��������Ĳ���
        seq 1 10 |xargs  -i date -d "{} days " +%Y-%m-%d    # �г�10������

```

##    dialog�˵�{
```shell

        # Ĭ�Ͻ���������� stderr ���������ʾ����Ļ   ʹ�ò���  --stdout �ɽ�ѡ�񸳸�����
        # �˳�״̬  0��ȷ  1����
```
##        ��������{
```shell
            --calendar          # ����
            --checklist         # ��������ʾһ��ѡ���б�ÿ��ѡ����Ա�������ѡ�� (��ѡ��)
            --form              # ��,����������һ������ǩ���ı��ֶΣ���Ҫ����д
            --fselect           # �ṩһ��·��������ѡ��������ļ�
            --gauge             # ��ʾһ�������ֳ���ɵİٷֱȣ�������ʾ����������
            --infobox           # ��ʾ��Ϣ�󣬣�û�еȴ���Ӧ���Ի������̷��أ����������Ļ(��Ϣ��)
            --inputbox          # ���û������ı�(�����)
            --inputmenu         # �ṩһ���ɹ��û��༭�Ĳ˵����ɱ༭�Ĳ˵���
            --menu              # ��ʾһ���б��û�ѡ��(�˵���)
            --msgbox(message)   # ��ʾһ����Ϣ,��Ҫ���û�ѡ��һ��ȷ����ť(��Ϣ��)
            --password          # �������ʾһ��������������ı�
            --pause             # ��ʾһ�����������ʾһ��ָ������ͣ�ڵ�״̬
            --radiolist         # �ṩһ���˵���Ŀ�飬����ֻ��һ����Ŀ������ѡ��(��ѡ��)
            --tailbox           # ��һ�����������ļ���ʹ��tail��������ʾ�ı�
            --tailboxbg         # ��tailbox���ƣ�������backgroundģʽ�²���
            --textbox           # �ڴ��й��������ı�������ʾ�ļ�������  (�ı���)
            --timebox           # �ṩһ�����ڣ�ѡ��Сʱ�����ӣ���
            --yesno(yes/no)     # �ṩһ������yes��no��ť�ļ���Ϣ��
    ```

##        �������{
```shell
            --separate-output          # ����chicklist���,������һ�����һ��,�õ������������
            --ok-label "�ύ"          # ȷ����ť����
            --cancel-label "ȡ��"      # ȡ����ť����
            --title "����"             # ��������
            --stdout                   # ����������� stdout ���
            --backtitle "�ϱ�"         # �����ϱ�
            --no-shadow                # ȥ��������Ӱ
            --menu "�˵���" 20 60 14   # �˵������ڴ�С
            --clear                    # ��ɺ���������
            --no-cancel                # ����ʾȡ����
            --insecure                 # ʹ���Ǻ�������ÿ���ַ�
            --begin <y> <x>            # ָ���Ի������Ͻ�����Ļ���ϵ�������
            --timeout <��>             # ��ʱ,���صĴ������255,����û���ָ����ʱ����û�и�����Ӧ����,�Ͱ���ʱ����
            --defaultno                # ʹѡ��Ĭ��Ϊno
            --default-item <str>       # ������һ���嵥������˵��е�Ĭ����Ŀ��ͨ���ڿ��еĵ�һ����Ĭ��
            --sleep 5                  # �ڴ�����һ���Ի����ֹ(�ӳ�)��ʱ��(��)
            --max-input size           # ����������ַ����ڸ����Ĵ�С֮�ڡ����û��ָ����Ĭ����2048
            --keep-window              # �˳�ʱ���������ػ洰�ڡ������������ͬһ������������ʱ�����ڱ����������ݺ����õ�

        dialog --title "Check me" --checklist "Pick Numbers" 15 25 3 1 "one" "off" 2 "two" "on"         # ��ѡ����[������]
        dialog --title "title" --radiolist "checklist" 20 60 14 tag1 "item1" on tag2 "item2" off        # ��ѡ����(Բ����)
        dialog --title "title" --menu "MENU" 20 60 14 tag1 "item1" tag2 "item2"                         # ��ѡ����
        dialog --title "Installation" --backtitle "Star Linux" --gauge "Linux Kernel"  10 60 50         # ������
        dialog --title "����" --backtitle "Dialog" --yesno "˵��" 20 60                                 # ѡ��yes/no
        dialog --title "�������" --backtitle "Dialog" --msgbox "����" 20 60                            # ����
        dialog --title "hey" --backtitle "Dialog" --infobox "Is everything okay?" 10 60                 # ��ʾѶϢ�������뿪
        dialog --title "hey" --backtitle "Dialog" --inputbox "Is okay?" 10 60 "yes"                     # ����Ի���
        dialog --title "Array 30" --backtitle "All " --textbox /root/txt 20 75                          # ��ʾ�ĵ�����
        dialog --title "Add" --form "input" 12 40 4 "user" 1 1 "" 1 15 15 0 "name" 2 1 "" 2 15 15 0     # ��������Ի���
        dialog --title  "Password"  --insecure  --passwordbox  "����������"  10  35                     # �Ǻ���ʾ����--insecure
        dialog --stdout --title "����"  --calendar "��ѡ��" 0 0 9 1 2010                                # ѡ������
        dialog --title "title" --menu "MENU" 20 60 14 tag1 "item1" tag2 "item2" 2>tmp                   # ȡ������ŵ��ļ���(�Ա�׼����������)
        a=`dialog --title "title"  --stdout --menu "MENU" 20 60 14 tag1 "item1" tag2 "item2"`           # ѡ�������������(ʹ�ñ�׼���)
```
##        dialog�˵�ʵ��{
```shell
            while :
            do
            clear
            menu=`dialog --title "title"  --stdout --menu "MENU" 20 60 14 1 system 2 custom`
            [ $? -eq 0 ] && echo "$menu" || exit         # �ж�dialogִ��,ȡ���˳�
                while :
                do
                    case $menu in
                    1)
                        list="1a "item1" 2a "item2""     # ����˵��б����
                    ;;
                    2)
                        list="1b "item3" 2b "item4""
                    ;;
                    esac
                    result=`dialog --title "title"  --stdout --menu "MENU" 20 60 14 $list`
                    [ $? -eq 0 ] && echo "$result" || break    # �ж�dialogִ��,ȡ�����ز˵�,ע��:����ϲ�˵�ѭ��
                    read
                done
            done
    ```

##    select�˵�{
```shell

        # ������ڲ˵��Զ�����ʾ��������
        select menuitem in pick1 pick2 pick3 �˳�
        do
            echo $menuitem
            case $menuitem in
            �˳�)
                exit
            ;;
            *)
                select area in area1 area2 area3 ����
                do
                    echo $area
                    case $area in
                    ����)
                        break
                    ;;
                    *)
                        echo "��$area����"
                    ;;
                    esac
                done
            ;;
            esac
        done

```

##    shift{
```shell

        ./cs.sh 1 2 3
        #!/bin/sh
        until [ $# -eq 0 ]
        do
            echo "��һ������Ϊ: $1 ��������Ϊ: $#"
            #shift ����ִ��ǰ���� $1 ��ֵ��shift����ִ�к󲻿���
            shift
        done

```

##    getopts���ű��Ӳ���{
```shell

        #!/bin/sh
        while getopts :ab: name
        do
            case $name in
            a)
                aflag=1
            ;;
            b)
                bflag=1
                bval=$OPTARG
            ;;
            \?)
                echo "USAGE:`basename $0` [-a] [-b value]"
                exit  1
            ;;
            esac
        done
        if [ ! -z $aflag ] ; then
            echo "option -a specified"
            echo "$aflag"
            echo "$OPTIND"
        fi
        if [ ! -z $bflag ] ; then
            echo  "option -b specified"
            echo  "$bflag"
            echo  "$bval"
            echo  "$OPTIND"
        fi
        echo "here  $OPTIND"
        shift $(($OPTIND -1))
        echo "$OPTIND"
        echo " `shift $(($OPTIND -1))`  "

```

##    tclsh{
```shell

        set foo "a bc"                   # �������
        set b {$a};                      # ת��  b��ֵΪ" $a " ,�����Ǳ������
        set a 3; incr a 3;               # ���ֵ�����.  ��a��3,���Ҫ��3,��Ϊ incr a �C3;
        set c [expr 20/5];               # ����  c��ֵΪ4
        puts $foo;                       # ��ӡ����
        set qian(123) f;                 # ��������
        set qian(1,1,1) fs;              # ��ά����
        parray qian;                     # ��ӡ�����������Ϣ
        string length $qian;             # �����ر���qian�ĳ���
        string option string1 string2;   # �ַ���ش�����
        # option �Ĳ���ѡ��:
        # compare           �����ֵ������ʽ���бȽϡ�����string1 <,=,>string2�ֱ𷵻�-1,0,1
        # first             ����string2�е�һ�γ���string1��λ�ã����û�г���string1�򷵻�-1
        # last              ��first�෴
        # trim              ��string1��ɾ����ͷ�ͽ�β�ĳ�����string2�е��ַ�
        # tolower           ����string1�е������ַ���ת��ΪСд�ַ�������ַ���
        # toupper           ����string1�е������ַ���ת��Ϊ��д����ַ���
        # length            ����string1�ĳ���
        set a 1;while {$a < 3} { set a [incr a 1;]; };puts $a    # �жϱ���aС��3��ѭ��
        for {initialization} {condition} {increment} {body}      # ��ʼ������,����,����,�������
        for {set i 0} {$i < 10} {incr i} {puts $i;}              # ����ӡ��0��9
        if { ���ʽ } {
             #����;
         } else {
             #��������;
         }
        switch $x {

            �ַ���1 { ����1 ;}
            �ַ���2 { ����2 ;}
        }
        foreach element {0 m n b v} {

        # ����һ���Ԫ�н���ѭ��������ÿ�ζ���ִ������ѭ����
               switch $element {

                     # �ж�element��ֵ
         }
    }

##        expect����{
```shell

            exp_continue         # ���spawn����ʱ����
            interact             # ִ����ɺ󱣳ֽ���״̬���ѿ���Ȩ��������̨
            expect "password:"   # �жϹؼ��ַ�
            send "passwd\r"      # ִ�н������������ֹ���������Ķ�����Ч���ַ�����β��"\r"
```
##            ssh��sudo{
```shell

                #!/bin/bash
                #sudoע�����������̨����
                #Defaults requiretty
                #sudoȥ��!����Զ��
                #Defaults !visiblepw

                /usr/bin/expect -c '
                set timeout 5
                spawn ssh -o StrictHostKeyChecking=no xuesong1@192.168.42.128 "sudo grep xuesong1 /etc/passwd"
                expect {
                    "passphrase" {
                        send_user "sshkey\n"
                        send "xuesong\r";
                        expect {
                            "sudo" {
                            send_user "sudo\n"
                            send "xuesong\r"
                            interact
                        }
                            eof {
                            send_user "sudo eof\n"
                        }
                    }
                }
                    "password:" {
                        send_user "ssh\n"
                        send "xuesong\r";
                        expect {
                            "sudo" {
                            send_user "sudo\n"
                            send "xuesong\r"
                            interact
                        }
                            eof {
                            send_user "sudo eof\n"
                        }
                    }
                }
                    "sudo" {
                            send_user "sudo\n"
                            send "xuesong\r"
                            interact
                        }
                   eof {
                        send_user "ssh eof\n"
                }
            }
                '

        }

            sshִ���������{
```shell
                /usr/bin/expect -c "
                proc jiaohu {} {
                    send_user expect_start
                    expect {
                        password {
                            send ${RemotePasswd}\r;
                            send_user expect_eof
                           expect {
                               \"does not exist\" {
                                    send_user expect_failure
                                    exit 10
                            }
                                password {
                                    send_user expect_failure
                                    exit 5
                            }
                                Password {
                                    send ${RemoteRootPasswd}\r;
                                    send_user expect_eof
                                   expect {
                                       incorrect {
                                            send_user expect_failure
                                            exit 6
                                    }
                                        eof
                                }
                            }
                                eof
                        }
                    }
                        passphrase {
                            send ${KeyPasswd}\r;
                            send_user expect_eof
                            expect {
                                \"does not exist\" {
                                    send_user expect_failure
                                    exit 10
                            }
							passphrase{
                                    send_user expect_failure
                                    exit 7
                            }
                                Password {
                                    send ${RemoteRootPasswd}\r;
                                    send_user expect_eof
                                    expect {
                                        incorrect {
                                            send_user expect_failure
                                            exit 6
                                    }
                                        eof
                                }
                            }
                                eof
                        }
                    }
					Password {
                            send ${RemoteRootPasswd}\r;
                            send_user expect_eof
                            expect {
							incorrect {
                                    send_user expect_failure
                                    exit 6
                            }
                                eof
                        }
                    }
                        \"No route to host\" {
                            send_user expect_failure
                            exit 4
                    }
                        \"Invalid argument\" {
                            send_user expect_failure
                            exit 8
                    }
					\"Connection refused\" {
                            send_user expect_failure
                            exit 9
                    }
                        \"does not exist\" {
                            send_user expect_failure
                            exit 10
                    }

                        \"Connection timed out\" {
                            send_user expect_failure
                            exit 11
                    }
					timeout {
                            send_user expect_failure
                            exit 3
                    }
                        eof
                }
            }
                set timeout $TimeOut
                switch $1 {
                    Ssh_Cmd {
                        spawn ssh -t -p $Port -o StrictHostKeyChecking=no $RemoteUser@$Ip /bin/su - root -c \\\"$Cmd\\\"
                        jiaohu
                }
				Ssh_Script {
                        spawn scp -P $Port -o StrictHostKeyChecking=no $ScriptPath $RemoteUser@$Ip:/tmp/${ScriptPath##*/};
                        jiaohu
                        spawn ssh -t -p $Port -o StrictHostKeyChecking=no $RemoteUser@$Ip /bin/su - root -c  \\\"/bin/sh /tmp/${ScriptPath##*/}\\\" ;
                        jiaohu
                }
                    Scp_File {
                        spawn scp -P $Port -o StrictHostKeyChecking=no -r $ScpPath $RemoteUser@$Ip:${ScpRemotePath};
                        jiaohu
                }
            }
                "
                state=`echo $?`

        }
```
##            ����˫�������ýϳ�����{
```shell

                #!/bin/bash
                RemoteUser=xuesong12
                Ip=192.168.1.2
                RemotePasswd=xuesong
                Cmd="/bin/echo "$PubKey" > "$RemoteKey"/authorized_keys"

                /usr/bin/expect -c "
                set timeout 10
                spawn ssh -o StrictHostKeyChecking=no $RemoteUser@$Ip {$Cmd};
                expect {
                    password: {
                        send_user RemotePasswd\n
                        send ${RemotePasswd}\r;
                        interact;
                }
                    eof {
                        send_user eof\n
                }
            }
                "

        }
```
##            telnet����{
```shell

                #!/bin/bash
                Ip="10.0.1.53"
                a="\{\'method\'\:\'doLogin\'\,\'params\'\:\{\'uName\'\:\'bobbietest\'\}"
                /usr/bin/expect -c"
                        set timeout 15
                        spawn telnet ${Ip} 8000
                        expect "Escape"
                        send "${a}\\r"
                        expect {
                                -re "\"err.*none\"" {
                                        exit 0
                            }
                               timeout {
                                        exit 1
                            }
                                eof {
                                        exit 2
                            }
                    }
                "
                echo $?

        }
```

##            ģ��ssh��¼{
```shell
                #�ô�:�ɼ��ػ�������

                #!/bin/bash
                Ip='192.168.1.6'            # ѭ������
                RemoteUser='user'           # ��ͨ�û�
                RemotePasswd='userpasswd'   # ��ͨ�û�������
                RemoteRootPasswd='rootpasswd'
                /usr/bin/expect -c "
                set timeout -1
                spawn ssh -t -p $Port -o StrictHostKeyChecking=no $RemoteUser@$Ip
                expect {
                    password {
                        send_user RemotePasswd
                        send ${RemotePasswd}\r;
                        expect {
                            \"does not exist\" {
                                send_user \"root user does not exist\n\"
                                exit 10
                        }
                            password {
                                send_user \"user passwd error\n\"
                                exit 5
                        }
                            Last {
                                send \"su - batch\n\"
                                expect {
                                    Password {
                                        send_user RemoteRootPasswd
                                        send ${RemoteRootPasswd}\r;
                                        expect {
                                            \"]#\" {
                                                send \"sh /tmp/update.sh update\n \"
                                                expect {
                                                    \"]#\" {
                                                        send_user ${Ip}_Update_Done\n
                                                }
                                                    eof
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
                   \"No route to host\" {
                        send_user \"host not found\n\"
                        exit 4
                }
                   \"Invalid argument\" {
                        send_user \"incorrect parameter\n\"
                        exit 8
                }
				\"Connection refused\" {
                        send_user \"invalid port parameters\n\"
                        exit 9
                }
                    \"does not exist\" {
                        send_user \"root user does not exist\"
                        exit 10
                }
                    timeout {
                        send_user \"connection timeout \n\"
                        exit 3
                }
                    eof
            }
                "
                state=`echo $?`

        }

    }

}

}
```
#9 ʵ��{

##    ��1���ӵ�100{
```shell

        echo $[$(echo +{1..100})]
        echo $[(100+1)*(100/2)]
        seq -s '+' 100 |bc

```

##    �жϲ����Ƿ�Ϊ��-���˳�����ӡnull{
```shell

        #!/bin/sh
        echo $1
        name=${1:?"null"}
        echo $name

```

##    ѭ������{
```shell

        for ((i=0;i<${#o[*]};i++))
        do
            echo ${o[$i]}
        done

```

##    �ж�·��{
```shell

        if [ -d /root/Desktop/text/123 ];then
            echo "�ҵ���123"
            if [ -d /root/Desktop/text ]
            then echo "�ҵ���text"
            else echo "û�ҵ�text"
            fi
        else echo "û�ҵ�123�ļ���"
        fi

```

##    �ҳ����ִ������{
```shell

        awk '{print $1}' file|sort |uniq -c|sort -k1r

```

##    �жϽű������Ƿ���ȷ{
```shell

        ./test.sh  -p 123 -P 3306 -h 127.0.0.1 -u root
        #!/bin/sh
        if [ $# -ne 8 ];then
            echo "USAGE: $0 -u user -p passwd -P port -h host"
            exit 1
        fi

        while getopts :u:p:P:h: name
        do
            case $name in
            u)
                mysql_user=$OPTARG
            ;;
            p)
                mysql_passwd=$OPTARG
            ;;
            P)
                mysql_port=$OPTARG
            ;;
            h)
                mysql_host=$OPTARG
            ;;
            *)
                echo "USAGE: $0 -u user -p passwd -P port -h host"
                exit 1
            ;;
            esac
        done

        if [ -z $mysql_user ] || [ -z $mysql_passwd ] || [ -z $mysql_port ] || [ -z $mysql_host ]
        then
            echo "USAGE: $0 -u user -p passwd -P port -h host"
            exit 1
        fi

        echo $mysql_user $mysql_passwd $mysql_port  $mysql_host
        #��� root 123 3306 127.0.0.1

```

##    ����ƥ������{
```shell

        ^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$

```

##    ��ӡ���{
```shell

        #!/bin/sh
        clear
        awk 'BEGIN{
        print "+--------------------+--------------------+";
        printf "|%-20s|%-20s|\n","Name","Number";
        print "+--------------------+--------------------+";
    }'
        a=`grep "^[A-Z]" a.txt |sort +1 -n |awk '{print $1":"$2}'`
        #cat a.txt |sort +1 -n |while read list
        for list in $a
        do
            name=`echo $list |awk -F: '{print $1}'`
            number=`echo $list |awk -F: '{print $2}'`
            awk 'BEGIN{printf "|%-20s|%-20s|\n","'"$name"'","'"$number"'";
            print "+--------------------+--------------------+";
       }'
        done
        awk 'BEGIN{
        print "              *** The End ***              "
        print "                                           "
   }'

}
```
##    �ж������Ƿ�Ϸ�{
```shell

        #!/bin/sh
        while read a
        do
          if echo $a | grep -q "-" && date -d $a +%Y%m%d > /dev/null 2>&1
          then
            if echo $a | grep -e '^[0-9]\{4\}-[01][0-9]-[0-3][0-9]$'
            then
                break
            else
                echo "����������ڲ��Ϸ�����������룡"
            fi
          else
            echo "����������ڲ��Ϸ�����������룡"
          fi
        done
        echo "����Ϊ$a"

```

##    ��ӡ���ڶ���������{
```shell

        #!/bin/bash
        qsrq=20010101
        jsrq=20010227
        n=0
        >tmp
        while :;do
        current=$(date +%Y%m%d -d"$n day $qsrq")
        if [[ $current == $jsrq ]];then
            echo $current >>tmp;break
        else
            echo $current >>tmp
            ((n++))
        fi
        done
        rq=`awk 'NR==1{print}' tmp`

```

##    ��ѧ�����С�㷨{
```shell

        #!/bin/sh
        A=1
        B=1
        while [ $A -le 10 ]
        do
            SUM=`expr $A \* $B`
            echo "$SUM"
            if [ $A = 10 ]
            then
                B=`expr $B + 1`
                A=1
            fi
            A=`expr $A + 1`
        done

```

##    ���кϲ�{
```shell

        sed '{N;s/\n//}' file                   # �����кϲ�һ��(ȥ�����з�)
        awk '{printf(NR%2!=0)?$0" ":$0" \n"}'   # �����кϲ�һ��
        awk '{printf"%s ",$0}'                  # �������кϲ�
        awk '{if (NR%4==0){print $0} else {printf"%s ",$0}}' file    # ��4�кϲ�Ϊһ��(����չ)

```

##    ����ת��{
```shell

        cat a.txt | xargs           # ��ת��
        cat a.txt | xargs -n1       # ��ת��

```

##    ����ת����{
```shell

        cat file|tr '\n' ' '
        echo $(cat file)

        #!/bin/sh
        for i in `cat file`
        do
              a=${a}" "${i}
        done
        echo $a

```

##    ȡ�û��ĸ�Ŀ¼{
```shell

        #! /bin/bash
        while read name pass uid gid gecos home shell
        do
            echo $home
        done < /etc/passwd

```

##    Զ�̴��{
```shell

        ssh -n $ip 'find '$path' /data /opt -type f  -name "*.sh" -or -name "*.py" -or -name "*.pl" |xargs tar zcvpf /tmp/data_backup.tar.gz'

```

##    �Ѻ���ת��encode��ʽ{
```shell

        echo ��̳ | tr -d "\n" | xxd -i | sed -e "s/ 0x/%/g" | tr -d " ,\n"
        %c2%db%cc%b3
        echo ��̳ | tr -d "\n" | xxd -i | sed -e "s/ 0x/%/g" | tr -d " ,\n" | tr "[a-f]" "[A-F]"  # ��д��
        %C2%DB%CC%B3

```

##    ��Ŀ¼���д�д��ĸ���ļ�����Ϊȫ��Сд{
```shell

        #!/bin/bash
        for f in *;do
            mv $f `echo $f |tr "[A-Z]" "[a-z]"`
        done

```

##    �����������У��ڲ���������ǰ����{
```shell

        #/bin/bash
        lastrow=null
        i=0
        cat incl|while read line
        do
        i=`expr $i + 1`
        if echo "$lastrow" | grep "#include <[A-Z].h>"
        then
            if echo "$line" | grep -v  "#include <[A-Z].h>"
            then
                sed -i ''$i'i\\/\/All header files are include' incl
                i=`expr $i + 1`
            fi
        fi
        lastrow="$line"
        done

```

##    ��ѯ���ݿ���������{
```shell

        #/bin/bash
        path1=/data/mysql/data/
        dbpasswd=db123
        #MyISAM��InnoDB
        engine=InnoDB

        if [ -d $path1 ];then

        dir=`ls -p $path1 |awk '/\/$/'|awk -F'/' '{print $1}'`
            for db in $dir
            do
            number=`mysql -uroot -p$dbpasswd -A -S "$path1"mysql.sock -e "use ${db};show table status;" |grep -c $engine`
                if [ $number -ne 0 ];then
                echo "${db}"
                fi
            done
        fi

```

##    �����޸����ݿ�����{
```shell

        #/bin/bash
        for db in test test1 test3
        do
            tables=`mysql -uroot -pdb123 -A -S /data/mysql/data/mysql.sock -e "use $db;show tables;" |awk 'NR != 1{print}'`

            for table in $tables
            do
                mysql -uroot -pdb123 -A -S /data/mysql/data/mysql.sock -e "use $db;alter table $table engine=MyISAM;"
            done
        done

```

##    ��shellȡ�������ݲ���mysql���ݿ�{
```shell

        mysql -u$username -p$passwd -h$dbhost -P$dbport -A -e "
        use $dbname;
        insert into data values ('','$ip','$date','$time','$data')
        "

```

##    �����ڼ������{
```shell

        D1=`date -d '20070409' +"%s"`
        D2=`date -d '20070304 ' +"%s"`
        D3=$(($D1 - $D2))
        echo $(($D3/60/60/24))

```

##    whileִ��sshֻѭ��һ��{
```shell

        cat -    # ��cat�������ļ�stdin����Ϣ
        seq 10 | while read line; do ssh localhost "cat -"; done        # ��ʾ��9���Ǳ�ssh�Ե���
        seq 10 | while read line; do ssh -n localhost "cat -"; done     # ssh����-n�����ɱ���ֻѭ��һ��

```

##    ssh����ִ������{
```shell

        #�汾1
        #!/bin/bash
        while read line
        do
        Ip=`echo $line|awk '{print $1}'`
        Passwd=`echo $line|awk '{print $2}'`
        ssh -n localhost "cat -"
        sshpass -p "$Passwd" ssh -n -t -o StrictHostKeyChecking=no root@$Ip "id"
        done<iplist.txt

        #�汾2
        #!/bin/bash
        Iplist=`awk '{print $1}' iplist.txt`
        for Ip in $Iplist
        do
        Passwd=`awk '/'$Ip'/{print $2}' iplist.txt`
        sshpass -p "$Passwd" ssh -n -t -o StrictHostKeyChecking=no root@$Ip "id"
        done

```

##    ��ͬһλ�ô�ӡ�ַ�{
```shell

        #!/bin/bash
        echo -ne "\t"
        for i in `seq -w 100 -1 1`
        do
            echo -ne "$i\b\b\b";      # �ؼ�\b�˸�
            sleep 1;
        done

```

##    ����̺�̨�������׿���{
```shell

        #!/bin/bash
        test () {
            echo $a
            sleep 5
    }
        for a in `seq 1 30`
        do
            test &
            echo $!
            ((num++))
            if [ $num -eq 6 ];then
            echo "wait..."
            wait
            num=0
            fi
        done
        wait

```

##    shell����{
```shell

        #!/bin/bash
        tmpfile=$$.fifo   # �����ܵ�����
        mkfifo $tmpfile   # �����ܵ�
        exec 4<>$tmpfile  # �����ļ���ʾ4���Զ�д��ʽ�����ܵ�$tmpfile
        rm $tmpfile       # �������Ĺܵ��ļ����
        thred=4           # ָ����������
        seq=(1 2 3 4 5 6 7 8 9 21 22 23 24 25 31 32 33 34 35) # ���������б�

        # Ϊ�����̴߳�����Ӧ������ռλ
        {
        for (( i = 1;i<=${thred};i++ ))
        do
            echo;  # ��Ϊread����һ�ζ�ȡһ�У�һ��echoĬ�����һ�����з�������Ϊÿ���߳����һ��ռλ����
        done
    } >&4      # ��ռλ��Ϣд��ܵ�

        for id in ${seq}  # �������б� seq �а������ȡÿһ������
        do
          read  # ��ȡһ�У���fd4�е�һ��ռλ��
          (./ur_command ${id};echo >&4 ) &   # �ں�ִ̨������ur_command �������� ${id} ������ǰ��������ִ�������fd4��д��һ��ռλ��
        done <&4    # ָ��fd4Ϊ����for�ı�׼����
        wait        # �ȴ������ڴ�shell�ű��������ĺ�̨�������
        exec 4>&-   # �رչܵ�

```

##    shell��������{
```shell

        function ConCurrentCmd()
        {
            #������
            Thread=30

            #�б��ļ�
            CurFileName=iplist.txt

            #����fifo�ļ�
            FifoFile="$$.fifo"

            #�½�һ��fifo���͵��ļ�
            mkfifo $FifoFile

            #��fd6���fifo�����ļ��Զ�д�ķ�ʽ��������
            exec 6<>$FifoFile
            rm $FifoFile

            #��ʵ�Ͼ������ļ�������6�з�����$Thread���س���
            for ((i=0;i<=$Thread;i++));do echo;done >&6

            #�˺��׼���뽫����fd5
            exec 5<$CurFileName

            #��ʼѭ����ȡ�ļ��б��е���
            Count=0
            while read -u5 line
            do
                read -u6
                let Count+=1
                # �˴�����һ���ӽ��̷ŵ���ִ̨��
                # һ��read -u6����ִ��һ��,�ʹ�fd6�м�ȥһ���س�����Ȼ������ִ��
                # fd6��û�лس�����ʱ��,��ͣ������,�Ӷ�ʵ���˽�����������
                {
                    echo $Count

                    #��δ�������ִ�о���Ĳ�����
                    function

                    echo >&6
                    #�����̽����Ժ�,����fd6��׷��һ���س���,��������read -u6��ȥ���Ǹ�
            } &
            done

            #�ȴ����к�̨�ӽ��̽���
            wait

            #�ر�fd6
            exec 6>&-

            #�ر�fd5
            exec 5>&-
    ```

##        ��������{
```shell

            #!/bin/bash

            pnum=3

            task () {
                echo "$u start"
                sleep 5
                echo "$u done"
        }

            FifoFile="$$.fifo"
            mkfifo $FifoFile
            exec 6<>$FifoFile
            rm $FifoFile
            
            for ((i=0;i<=$pnum;i++));do echo;done >&6

            for u in `seq 1 20`
            do
                read -u6
                {
                    task
                    [ $? -eq 0 ] && echo "${u} �γɹ�" || echo "${u} ��ʧ��"
                    echo >&6
            } &
            done
            wait
            exec 6>&-
```

##    ����{
```shell

        ip(){
            echo "a 1"|awk '$1=="'"$1"'"{print $2}'
    }
        web=a
        ip $web

```

##    ���������Ƿ����{
```shell

        rpm -q dialog >/dev/null
        if [ "$?" -ge 1 ];then
            echo "install dialog,Please wait..."
            yum -y install dialog
            rpm -q dialog >/dev/null
            [ $? -ge 1 ] && echo "dialog installation failure,exit" && exit
            echo "dialog done"
            read
        fi

```

##    ��Ϸά���˵�-�޸������ļ�{
```shell

        #!/bin/bash

        conf=serverlist.xml
        AreaList=`awk -F '"' '/<s/{print $2}' $conf`

        select area in $AreaList ȫ�� �˳�
        do
            echo ""
            echo $area
            case $area in
            �˳�)
                exit
            ;;
            *)
                select operate in "�޸İ汾��" "���ά����" "ɾ��ά����" "���ز˵�"
                do
                    echo ""
                    echo $operate
                    case $operate in
                    �޸İ汾��)
                        echo ������汾��
                        while read version
                        do
                            if echo $version | grep -w 10[12][0-9][0-9][0-9][0-9][0-9][0-9]
                            then
                                break
                            fi
                            echo �����������ȷ�İ汾��
                        done
                        case $area in
                        ȫ��)
                            case $version in
                            101*)
                                echo "��ȷ�ϲ����� $area ������ $operate"
                                read
                                sed -i 's/101[0-9][0-9][0-9][0-9][0-9][0-9]/'$version'/' $conf
                            ;;
                            102*)
                                echo "��ȷ�ϲ����� $area ��ʽ�� $operate"
                                read
                                sed -i 's/102[0-9][0-9][0-9][0-9][0-9][0-9]/'$version'/' $conf
                            ;;
                            esac
                        ;;
                        *)
                            type=`awk -F '"' '/'$area'/{print $14}' $conf |cut -c1-3`
                            readtype=`echo $version |cut -c1-3`
                            if [ $type != $readtype ]
                            then
                                echo "�汾�Ų���Ӧ������²���"
                                continue
                            fi

                            echo "��ȷ�ϲ����� $area �� $operate"
                            read

                            awk -F '"' '/'$area'/{print $12}' $conf |xargs -i sed -i '/'{}'/s/10[12][0-9][0-9][0-9][0-9][0-9][0-9]/'$version'/' $conf
                        ;;
                        esac
                    ;;
                    ���ά����)
                        case $area in
                        ȫ��)
                            echo "��ȷ�ϲ����� $area �� $operate"
                            read
                            awk -F '"' '/<s/{print $2}' $conf |xargs -i sed -i 's/'{}'/&ά����/' $conf
                        ;;
                        *)
                            echo "��ȷ�ϲ����� $area �� $operate"
                            read
                            sed -i 's/'$area'/&ά����/' $conf
                        ;;
                        esac
                    ;;
                    ɾ��ά����)
                        case $area in
                        ȫ��)
                            echo "��ȷ�ϲ����� $area �� $operate"
                            read
                            sed -i 's/ά����//' $conf
                        ;;
                        *)
                            echo "��ȷ�ϲ����� $area �� $operate"
                            read
                            sed -i '/'$area'/s/ά����//' $conf
                        ;;
                        esac
                    ;;
                    ���ز˵�)
                        break
                    ;;
                    esac
                done
            ;;
            esac
            echo "�س�����ѡ����"
        done

```

##    keepalive�޳���˷���{
```shell

        #!/bin/bash
        #�������Զ���,Ĭ��8��
        if [ X$2 == X ];then
            echo "error: IP null"
            read
            exit
        fi
        case $1 in
        del)
            sed -i '/real_server.*'$2'.*8888/,+8 s/^/#/' /etc/keepalived/keepalived.conf
            /etc/init.d/keepalived reload
        ;;
        add)
            sed -i '/real_server.*'$2'.*8888/,+8 s/^#//' /etc/keepalived/keepalived.conf
            /etc/init.d/keepalived reload
        ;;
        *)
            echo "Parameter error"
        ;;
        esac

```

##    ץȡϵͳ�и�����ߵĽ���{
```shell

        #!/bin/bash
        LANG=C
        PATH=/sbin:/usr/sbin:/bin:/usr/bin
        interval=1
        length=86400
        for i in $(seq 1 $(expr ${length} / ${interval}));do
        date
        LANG=C ps -eT -o%cpu,pid,tid,ppid,comm | grep -v CPU | sort -n -r | head -20
        date
        LANG=C cat /proc/loadavg
        { LANG=C ps -eT -o%cpu,pid,tid,ppid,comm | sed -e 's/^ *//' | tr -s ' ' | grep -v CPU | sort -n -r | cut -d ' ' -f 1 | xargs -I{} echo -n "{} + " && echo ' 0'; } | bc -l
        sleep ${interval}
        done
        fuser -k $0

```

##    �����й��������ʼ����˺�����{
```shell

        #!/bin/bash

        IpList=`awk '$1!~"^#"&&$1!=""{print $1}' host.list`

        QueryAdd='http://www.anti-spam.org.cn/Rbl/Query/Result'
        ComplaintAdd='http://www.anti-spam.org.cn/Rbl/Getout/Submit'

        CONTENT='������һ�������XXX��xxxxxxx�����뽫���ǵķ��ͷ�����IP�Ƴ���������лл��
        �����ʩ��
        1.XXXX��
        2.XXXX��'
        CORP='abc.com'
        WWW='www.abc.cm'
        NAME='def'
        MAIL='def@163.com.cn'
        TEL='010-50000000'
        LEVEL='0'

        for Ip in $IpList
        do
            Status=`curl -d "IP=$Ip" $QueryAdd |grep 'Getout/ShowForm?IP=' |grep -wc '��������'`
            if [ $Status -ge 1 ];then
                IpStatus="��������"
                results=`curl -d "IP=${Ip}&CONTENT=${CONTENT}&CORP=${CORP}&WWW=${WWW}&NAME=${NAME}&MAIL=${MAIL}&TEL=${TEL}&LEVEL=${LEVEL}" $ComplaintAdd |grep -E '���ĺ����������������ύ|��IP�����������ѱ������ύ|�������ڽ������б��ܾ��ļ�¼'`
                echo $results
                if echo $results | grep '���ĺ����������������ύ'  > /dev/null 2>&1
                then
                    complaint='���߳ɹ�'
                elif echo $results | grep '��IP�����������ѱ������ύ'  > /dev/null 2>&1
                then
                    complaint='�����ظ�'
                elif echo $results | grep '�������ڽ������б��ܾ��ļ�¼'  > /dev/null 2>&1
                then
                    complaint='���߾ܾ�'
                else
                    complaint='�쳣'
                fi
            else
                IpStatus='����'
                complaint='��������'
            fi
            echo "$Ip    $IpStatus    $complaint" >> $(date +%Y%m%d_%H%M%S).log
        done

}
```
##    Web Server in Awk{
```shell

        #gawk -f file
        BEGIN {
          x        = 1                         # script exits if x < 1
          port     = 8080                      # port number
          host     = "/inet/tcp/" port "/0/0"  # host string
          url      = "http://localhost:" port  # server url
          status   = 200                       # 200 == OK
          reason   = "OK"                      # server response
          RS = ORS = "\r\n"                    # header line terminators
          doc      = Setup()                   # html document
          len      = length(doc) + length(ORS) # length of document
          while (x) {
             if ($1 == "GET") RunApp(substr($2, 2))
             if (! x) break
             print "HTTP/1.0", status, reason |& host
             print "Connection: Close"        |& host
             print "Pragma: no-cache"         |& host
             print "Content-length:", len     |& host
             print ORS doc                    |& host
             close(host)     # close client connection
             host |& getline # wait for new client request
      }
          # server terminated...
          doc = Bye()
          len = length(doc) + length(ORS)
          print "HTTP/1.0", status, reason |& host
          print "Connection: Close"        |& host
          print "Pragma: no-cache"         |& host
          print "Content-length:", len     |& host
          print ORS doc                    |& host
          close(host)
    }
        function Setup() {
          tmp = "<html>\
          <head><title>Simple gawk server</title></head>\
          <body>\
          <p><a href=" url "/xterm>xterm</a>\
          <p><a href=" url "/xcalc>xcalc</a>\
          <p><a href=" url "/xload>xload</a>\
          <p><a href=" url "/exit>terminate script</a>\
          </body>\
          </html>"
          return tmp
    }

       function Bye() {
          tmp = "<html>\
          <head><title>Simple gawk server</title></head>\
          <body><p>Script Terminated...</body>\
          </html>"
          return tmp
    }

        function RunApp(app) {
          if (app == "xterm")  {system("xterm&"); return}
          if (app == "xcalc" ) {system("xcalc&"); return}
          if (app == "xload" ) {system("xload&"); return}
          if (app == "exit")   {x = 0}
    }

}
```