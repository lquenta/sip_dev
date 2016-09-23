<?php

// Init vars
$LOCAL_ROOT         = "/var/www/html/siplus_bo";
$LOCAL_REPO_NAME    = "siplus_bo";
$LOCAL_REPO         = "{$LOCAL_ROOT}/{$LOCAL_REPO_NAME}";
$REMOTE_REPO        = "https://github.com/lquenta/sip_dev.gitub";
$DESIRED_BRANCH     = "prod";

// Delete local repo if it exists
if (file_exists($LOCAL_REPO)) {
    shell_exec("rm -rf {$LOCAL_REPO}");
}

// Clone fresh repo from github using desired local repo name and checkout the desired branch
echo shell_exec("cd {$LOCAL_ROOT} && git clone {$REMOTE_REPO} {$LOCAL_REPO_NAME} && cd {$LOCAL_REPO} && git checkout {$BRANCH}");

die("done " . mktime());
