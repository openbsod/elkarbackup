<?php

/* BinovoElkarBackupBundle:Default:rsnapshotconfig.txt.twig */
class __TwigTemplate_c050af6b3229dee50778ae607ac7c2371450ecb7d902fcb5569a154cb773e90d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        echo "#################################################
# rsnapshot.conf - rsnapshot configuration file #
#################################################
#                                               #
# PLEASE BE AWARE OF THE FOLLOWING RULES:       #
#                                               #
# This file requires tabs between elements      #
#                                               #
# Directories require a trailing slash:         #
#   right: /home/                               #
#   wrong: /home                                #
#                                               #
#################################################

#######################
# CONFIG FILE VERSION #
#######################

config_version\t1.2

###########################
# SNAPSHOT ROOT DIRECTORY #
###########################

# All snapshots will be stored under this root directory.
#
snapshot_root\t";
        // line 31
        echo (isset($context["snapshotRoot"]) ? $context["snapshotRoot"] : null);
        echo "

# If no_create_root is enabled, rsnapshot will not automatically create the
# snapshot_root directory. This is particularly useful if you are backing
# up to removable media, such as a FireWire or USB drive.
#
#no_create_root\t1

#################################
# EXTERNAL PROGRAM DEPENDENCIES #
#################################

# LINUX USERS:   Be sure to uncomment \"cmd_cp\". This gives you extra features.
# EVERYONE ELSE: Leave \"cmd_cp\" commented out for compatibility.
#
# See the README file or the man page for more details.
#
cmd_cp\t\t/bin/cp

# uncomment this to use the rm program instead of the built-in perl routine.
#
cmd_rm\t\t/bin/rm

# rsync must be enabled for anything to work. This is the only command that
# must be enabled.
#
cmd_rsync\t/usr/bin/rsync

# Uncomment this to enable remote ssh backups over rsync.
#
cmd_ssh\t/usr/bin/ssh

# Comment this out to disable syslog support.
#
cmd_logger\t/usr/bin/logger

# Uncomment this to specify the path to \"du\" for disk usage checks.
# If you have an older version of \"du\", you may also want to check the
# \"du_args\" parameter below.
#
#cmd_du\t\t/usr/bin/du

# Uncomment this to specify the path to rsnapshot-diff.
#
#cmd_rsnapshot_diff\t/usr/local/bin/rsnapshot-diff

# Specify the path to a script (and any optional arguments) to run right
# before rsnapshot syncs files
#
";
        // line 80
        if ((isset($context["cmdPreExec"]) ? $context["cmdPreExec"] : null)) {
            // line 81
            echo "cmd_preexec\t";
            echo (isset($context["cmdPreExec"]) ? $context["cmdPreExec"] : null);
            echo "
";
        } else {
            // line 83
            echo "#cmd_preexec\t/path/to/preexec/script
";
        }
        // line 85
        echo "
# Specify the path to a script (and any optional arguments) to run right
# after rsnapshot syncs files
#
";
        // line 89
        if ((isset($context["cmdPostExec"]) ? $context["cmdPostExec"] : null)) {
            // line 90
            echo "cmd_postexec\t";
            echo (isset($context["cmdPostExec"]) ? $context["cmdPostExec"] : null);
            echo "
";
        } else {
            // line 92
            echo "#cmd_postexec\t/path/to/postexec/script
";
        }
        // line 94
        echo "
#########################################
#           BACKUP INTERVALS            #
# Must be unique and in ascending order #
# i.e. hourly, daily, weekly, etc.      #
#########################################

";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["retains"]) ? $context["retains"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["retain"]) {
            // line 102
            echo "retain\t";
            echo $this->getAttribute($context["retain"], 0, array(), "array");
            echo "\t";
            echo $this->getAttribute($context["retain"], 1, array(), "array");
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['retain'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "
############################################
#              GLOBAL OPTIONS              #
# All are optional, with sensible defaults #
############################################

# Verbose level, 1 through 5.
# 1     Quiet           Print fatal errors only
# 2     Default         Print errors and warnings only
# 3     Verbose         Show equivalent shell commands being executed
# 4     Extra Verbose   Show extra verbose information
# 5     Debug mode      Everything
#
verbose\t\t2

# Same as \"verbose\" above, but controls the amount of data sent to the
# logfile, if one is being used. The default is 3.
#
loglevel\t3

# If you enable this, data will be written to the file you specify. The
# amount of data written is controlled by the \"loglevel\" parameter.
#
#logfile\t/var/log/rsnapshot

# If enabled, rsnapshot will write a lockfile to prevent two instances
# from running simultaneously (and messing up the snapshot_root).
# If you enable this, make sure the lockfile directory is not world
# writable. Otherwise anyone can prevent the program from running.
#
lockfile\t";
        // line 134
        echo (isset($context["tmp"]) ? $context["tmp"] : null);
        echo "/rsnapshot.";
        echo (isset($context["idClient"]) ? $context["idClient"] : null);
        echo "_";
        echo (isset($context["idJob"]) ? $context["idJob"] : null);
        echo ".pid

# Default rsync args. All rsync commands have at least these options set.
#
#rsync_short_args -a
";
        // line 139
        if ((isset($context["rsyncShortArgs"]) ? $context["rsyncShortArgs"] : null)) {
            // line 140
            echo "rsync_short_args\t-a\t";
            echo (isset($context["rsyncShortArgs"]) ? $context["rsyncShortArgs"] : null);
            echo "
";
        }
        // line 142
        echo "#rsync_long_args\t--delete --numeric-ids --relative --delete-excluded
";
        // line 143
        if ((isset($context["useLocalPermissions"]) ? $context["useLocalPermissions"] : null)) {
            // line 144
            echo "rsync_long_args\t--delete --numeric-ids --relative --delete-excluded --chmod=Fug=rwX,Dug=rwx,Fo=r,Do=rx --stats  ";
            echo (isset($context["rsyncLongArgs"]) ? $context["rsyncLongArgs"] : null);
            echo "
";
        } else {
            // line 146
            echo "rsync_long_args\t--delete --numeric-ids --relative --delete-excluded --stats ";
            echo (isset($context["rsyncLongArgs"]) ? $context["rsyncLongArgs"] : null);
            echo "
";
        }
        // line 148
        echo "
# ssh has no args passed by default, but you can specify some here.
#
ssh_args\t-o BatchMode=yes -o StrictHostKeyChecking=no ";
        // line 151
        echo (isset($context["sshArgs"]) ? $context["sshArgs"] : null);
        echo "

# Default arguments for the \"du\" program (for disk space reporting).
# The GNU version of \"du\" is preferred. See the man page for more details.
# If your version of \"du\" doesn't support the -h flag, try -k flag instead.
#
#du_args\t-csh

# If this is enabled, rsync won't span filesystem partitions within a
# backup point. This essentially passes the -x option to rsync.
# The default is 0 (off).
#
#one_fs\t\t0

# The include and exclude parameters, if enabled, simply get passed directly
# to rsync. If you have multiple include/exclude patterns, put each one on a
# separate line. Please look up the --include and --exclude options in the
# rsync man page for more details on how to specify file name patterns.
#
#include\t???
#include\t???
#exclude\t???
#exclude\t???
";
        // line 174
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["includes"]) ? $context["includes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["include"]) {
            // line 175
            echo "include\t";
            echo $context["include"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['include'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["excludes"]) ? $context["excludes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["exclude"]) {
            // line 178
            echo "exclude\t";
            echo $context["exclude"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exclude'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 180
        echo "
# The include_file and exclude_file parameters, if enabled, simply get
# passed directly to rsync. Please look up the --include-from and
# --exclude-from options in the rsync man page for more details.
#
#include_file\t/path/to/include/file
#exclude_file\t/path/to/exclude/file

# If your version of rsync supports --link-dest, consider enable this.
# This is the best way to support special files (FIFOs, etc) cross-platform.
# The default is 0 (off).
#
#link_dest\t0

# When sync_first is enabled, it changes the default behaviour of rsnapshot.
# Normally, when rsnapshot is called with its lowest interval
# (i.e.: \"rsnapshot hourly\"), it will sync files AND rotate the lowest
# intervals. With sync_first enabled, \"rsnapshot sync\" handles the file sync,
# and all interval calls simply rotate files. See the man page for more
# details. The default is 0 (off).
#
#sync_first\t0
";
        // line 202
        if ((isset($context["syncFirst"]) ? $context["syncFirst"] : null)) {
            // line 203
            echo "sync_first\t1
";
        } else {
            // line 205
            echo "sync_first\t0
";
        }
        // line 207
        echo "
# If enabled, rsnapshot will move the oldest directory for each interval
# to [interval_name].delete, then it will remove the lockfile and delete
# that directory just before it exits. The default is 0 (off).
#
#use_lazy_deletes\t0

###############################
### BACKUP POINTS / SCRIPTS ###
###############################

# LOCALHOST
backup\t";
        // line 219
        echo (isset($context["url"]) ? $context["url"] : null);
        echo "\t.
";
    }

    public function getTemplateName()
    {
        return "BinovoElkarBackupBundle:Default:rsnapshotconfig.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  327 => 219,  313 => 207,  309 => 205,  305 => 203,  303 => 202,  279 => 180,  270 => 178,  266 => 177,  257 => 175,  253 => 174,  227 => 151,  222 => 148,  216 => 146,  210 => 144,  208 => 143,  205 => 142,  199 => 140,  197 => 139,  185 => 134,  153 => 104,  142 => 102,  138 => 101,  129 => 94,  125 => 92,  119 => 90,  117 => 89,  111 => 85,  107 => 83,  101 => 81,  99 => 80,  47 => 31,  19 => 5,);
    }
}
/* {##*/
/*  # @copyright 2012,2013 Binovo it Human Project, S.L.*/
/*  # @license http://www.opensource.org/licenses/bsd-license.php New-BSD*/
/*  #}*/
/* #################################################*/
/* # rsnapshot.conf - rsnapshot configuration file #*/
/* #################################################*/
/* #                                               #*/
/* # PLEASE BE AWARE OF THE FOLLOWING RULES:       #*/
/* #                                               #*/
/* # This file requires tabs between elements      #*/
/* #                                               #*/
/* # Directories require a trailing slash:         #*/
/* #   right: /home/                               #*/
/* #   wrong: /home                                #*/
/* #                                               #*/
/* #################################################*/
/* */
/* #######################*/
/* # CONFIG FILE VERSION #*/
/* #######################*/
/* */
/* config_version	1.2*/
/* */
/* ###########################*/
/* # SNAPSHOT ROOT DIRECTORY #*/
/* ###########################*/
/* */
/* # All snapshots will be stored under this root directory.*/
/* #*/
/* snapshot_root	{{snapshotRoot}}*/
/* */
/* # If no_create_root is enabled, rsnapshot will not automatically create the*/
/* # snapshot_root directory. This is particularly useful if you are backing*/
/* # up to removable media, such as a FireWire or USB drive.*/
/* #*/
/* #no_create_root	1*/
/* */
/* #################################*/
/* # EXTERNAL PROGRAM DEPENDENCIES #*/
/* #################################*/
/* */
/* # LINUX USERS:   Be sure to uncomment "cmd_cp". This gives you extra features.*/
/* # EVERYONE ELSE: Leave "cmd_cp" commented out for compatibility.*/
/* #*/
/* # See the README file or the man page for more details.*/
/* #*/
/* cmd_cp		/bin/cp*/
/* */
/* # uncomment this to use the rm program instead of the built-in perl routine.*/
/* #*/
/* cmd_rm		/bin/rm*/
/* */
/* # rsync must be enabled for anything to work. This is the only command that*/
/* # must be enabled.*/
/* #*/
/* cmd_rsync	/usr/bin/rsync*/
/* */
/* # Uncomment this to enable remote ssh backups over rsync.*/
/* #*/
/* cmd_ssh	/usr/bin/ssh*/
/* */
/* # Comment this out to disable syslog support.*/
/* #*/
/* cmd_logger	/usr/bin/logger*/
/* */
/* # Uncomment this to specify the path to "du" for disk usage checks.*/
/* # If you have an older version of "du", you may also want to check the*/
/* # "du_args" parameter below.*/
/* #*/
/* #cmd_du		/usr/bin/du*/
/* */
/* # Uncomment this to specify the path to rsnapshot-diff.*/
/* #*/
/* #cmd_rsnapshot_diff	/usr/local/bin/rsnapshot-diff*/
/* */
/* # Specify the path to a script (and any optional arguments) to run right*/
/* # before rsnapshot syncs files*/
/* #*/
/* {% if cmdPreExec %}*/
/* cmd_preexec	{{cmdPreExec|raw}}*/
/* {% else %}*/
/* #cmd_preexec	/path/to/preexec/script*/
/* {% endif %}*/
/* */
/* # Specify the path to a script (and any optional arguments) to run right*/
/* # after rsnapshot syncs files*/
/* #*/
/* {% if cmdPostExec %}*/
/* cmd_postexec	{{cmdPostExec|raw}}*/
/* {% else %}*/
/* #cmd_postexec	/path/to/postexec/script*/
/* {% endif %}*/
/* */
/* #########################################*/
/* #           BACKUP INTERVALS            #*/
/* # Must be unique and in ascending order #*/
/* # i.e. hourly, daily, weekly, etc.      #*/
/* #########################################*/
/* */
/* {% for retain in retains %}*/
/* retain	{{retain[0]}}	{{retain[1]}}*/
/* {% endfor %}*/
/* */
/* ############################################*/
/* #              GLOBAL OPTIONS              #*/
/* # All are optional, with sensible defaults #*/
/* ############################################*/
/* */
/* # Verbose level, 1 through 5.*/
/* # 1     Quiet           Print fatal errors only*/
/* # 2     Default         Print errors and warnings only*/
/* # 3     Verbose         Show equivalent shell commands being executed*/
/* # 4     Extra Verbose   Show extra verbose information*/
/* # 5     Debug mode      Everything*/
/* #*/
/* verbose		2*/
/* */
/* # Same as "verbose" above, but controls the amount of data sent to the*/
/* # logfile, if one is being used. The default is 3.*/
/* #*/
/* loglevel	3*/
/* */
/* # If you enable this, data will be written to the file you specify. The*/
/* # amount of data written is controlled by the "loglevel" parameter.*/
/* #*/
/* #logfile	/var/log/rsnapshot*/
/* */
/* # If enabled, rsnapshot will write a lockfile to prevent two instances*/
/* # from running simultaneously (and messing up the snapshot_root).*/
/* # If you enable this, make sure the lockfile directory is not world*/
/* # writable. Otherwise anyone can prevent the program from running.*/
/* #*/
/* lockfile	{{tmp}}/rsnapshot.{{idClient}}_{{idJob}}.pid*/
/* */
/* # Default rsync args. All rsync commands have at least these options set.*/
/* #*/
/* #rsync_short_args -a*/
/* {% if rsyncShortArgs %}*/
/* rsync_short_args	-a	{{rsyncShortArgs}}*/
/* {% endif %}*/
/* #rsync_long_args	--delete --numeric-ids --relative --delete-excluded*/
/* {% if useLocalPermissions %}*/
/* rsync_long_args	--delete --numeric-ids --relative --delete-excluded --chmod=Fug=rwX,Dug=rwx,Fo=r,Do=rx --stats  {{rsyncLongArgs}}*/
/* {% else %}*/
/* rsync_long_args	--delete --numeric-ids --relative --delete-excluded --stats {{rsyncLongArgs}}*/
/* {% endif %}*/
/* */
/* # ssh has no args passed by default, but you can specify some here.*/
/* #*/
/* ssh_args	-o BatchMode=yes -o StrictHostKeyChecking=no {{sshArgs}}*/
/* */
/* # Default arguments for the "du" program (for disk space reporting).*/
/* # The GNU version of "du" is preferred. See the man page for more details.*/
/* # If your version of "du" doesn't support the -h flag, try -k flag instead.*/
/* #*/
/* #du_args	-csh*/
/* */
/* # If this is enabled, rsync won't span filesystem partitions within a*/
/* # backup point. This essentially passes the -x option to rsync.*/
/* # The default is 0 (off).*/
/* #*/
/* #one_fs		0*/
/* */
/* # The include and exclude parameters, if enabled, simply get passed directly*/
/* # to rsync. If you have multiple include/exclude patterns, put each one on a*/
/* # separate line. Please look up the --include and --exclude options in the*/
/* # rsync man page for more details on how to specify file name patterns.*/
/* #*/
/* #include	???*/
/* #include	???*/
/* #exclude	???*/
/* #exclude	???*/
/* {% for include in includes %}*/
/* include	{{ include }}*/
/* {% endfor %}*/
/* {% for exclude in excludes %}*/
/* exclude	{{ exclude }}*/
/* {% endfor %}*/
/* */
/* # The include_file and exclude_file parameters, if enabled, simply get*/
/* # passed directly to rsync. Please look up the --include-from and*/
/* # --exclude-from options in the rsync man page for more details.*/
/* #*/
/* #include_file	/path/to/include/file*/
/* #exclude_file	/path/to/exclude/file*/
/* */
/* # If your version of rsync supports --link-dest, consider enable this.*/
/* # This is the best way to support special files (FIFOs, etc) cross-platform.*/
/* # The default is 0 (off).*/
/* #*/
/* #link_dest	0*/
/* */
/* # When sync_first is enabled, it changes the default behaviour of rsnapshot.*/
/* # Normally, when rsnapshot is called with its lowest interval*/
/* # (i.e.: "rsnapshot hourly"), it will sync files AND rotate the lowest*/
/* # intervals. With sync_first enabled, "rsnapshot sync" handles the file sync,*/
/* # and all interval calls simply rotate files. See the man page for more*/
/* # details. The default is 0 (off).*/
/* #*/
/* #sync_first	0*/
/* {% if syncFirst %}*/
/* sync_first	1*/
/* {% else %}*/
/* sync_first	0*/
/* {% endif %}*/
/* */
/* # If enabled, rsnapshot will move the oldest directory for each interval*/
/* # to [interval_name].delete, then it will remove the lockfile and delete*/
/* # that directory just before it exits. The default is 0 (off).*/
/* #*/
/* #use_lazy_deletes	0*/
/* */
/* ###############################*/
/* ### BACKUP POINTS / SCRIPTS ###*/
/* ###############################*/
/* */
/* # LOCALHOST*/
/* backup	{{url}}	.*/
/* */
