<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // about
        if ($pathinfo === '/about') {
            return array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::aboutAction',  '_route' => 'about',);
        }

        if (0 === strpos($pathinfo, '/c')) {
            if (0 === strpos($pathinfo, '/config/publickey/ge')) {
                // downloadPublicKey
                if ($pathinfo === '/config/publickey/get') {
                    return array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::downloadPublicKeyAction',  '_route' => 'downloadPublicKey',);
                }

                // generatePublicKey
                if ($pathinfo === '/config/publickey/generate') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_generatePublicKey;
                    }

                    return array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::generatePublicKeyAction',  '_route' => 'generatePublicKey',);
                }
                not_generatePublicKey:

            }

            // deleteClient
            if (0 === strpos($pathinfo, '/client') && preg_match('#^/client/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_deleteClient;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'deleteClient')), array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::deleteClientAction',));
            }
            not_deleteClient:

        }

        // login
        if ($pathinfo === '/login') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_login;
            }

            return array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::loginAction',  '_route' => 'login',);
        }
        not_login:

        if (0 === strpos($pathinfo, '/client')) {
            // editClient
            if (preg_match('#^/client/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_editClient;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'editClient')), array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::editClientAction',));
            }
            not_editClient:

            // saveClient
            if (preg_match('#^/client(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_saveClient;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'saveClient')), array (  'id' => '-1',  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::saveClientAction',));
            }
            not_saveClient:

            // deleteJob
            if (preg_match('#^/client/(?P<idClient>\\d+)/job/(?P<idJob>\\d+)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_deleteJob;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'deleteJob')), array (  'idJob' => '-1',  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::deleteJobAction',));
            }
            not_deleteJob:

            // editJob
            if (preg_match('#^/client/(?P<idClient>[^/]++)/job/(?P<idJob>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_editJob;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'editJob')), array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::editJobAction',));
            }
            not_editJob:

            // runJob
            if (preg_match('#^/client/(?P<idClient>\\d+)/job/(?P<idJob>\\d+)/run$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_runJob;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'runJob')), array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::runJobAction',));
            }
            not_runJob:

            // abortJob
            if (preg_match('#^/client/(?P<idClient>\\d+)/job/(?P<idJob>\\d+)/abort$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_abortJob;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'abortJob')), array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::runAbortAction',));
            }
            not_abortJob:

            // showJobConfig
            if (preg_match('#^/client/(?P<idClient>\\d+)/job/(?P<idJob>\\d+)/config$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_showJobConfig;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'showJobConfig')), array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::showJobConfigAction',));
            }
            not_showJobConfig:

            // saveJob
            if (preg_match('#^/client/(?P<idClient>\\d+)/job(?:/(?P<idJob>\\d+))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_saveJob;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'saveJob')), array (  'idJob' => '-1',  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::saveJobAction',));
            }
            not_saveJob:

            // showJobBackup
            if (preg_match('#^/client/(?P<idClient>\\d+)/job/(?P<idJob>\\d+)/backup/(?P<action>view|download|downloadzip)(?:/(?P<path>.*))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_showJobBackup;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'showJobBackup')), array (  'path' => '/',  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::showJobBackupAction',));
            }
            not_showJobBackup:

        }

        // home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'home');
            }

            return array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::homeAction',  '_route' => 'home',);
        }

        // binovo_elkarbackup_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'binovo_elkarbackup_default_index')), array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/policy')) {
            // editPolicy
            if (preg_match('#^/policy/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_editPolicy;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'editPolicy')), array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::editPolicyAction',));
            }
            not_editPolicy:

            // deletePolicy
            if (preg_match('#^/policy/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_deletePolicy;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'deletePolicy')), array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::deletePolicyAction',));
            }
            not_deletePolicy:

            // savePolicy
            if (preg_match('#^/policy(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_savePolicy;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'savePolicy')), array (  'id' => '-1',  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::savePolicyAction',));
            }
            not_savePolicy:

        }

        // sortJobs
        if ($pathinfo === '/jobs/sort') {
            return array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::sortJobsAction',  '_route' => 'sortJobs',);
        }

        // showClients
        if ($pathinfo === '/clients') {
            return array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::showClientsAction',  '_route' => 'showClients',);
        }

        // showScripts
        if ($pathinfo === '/scripts') {
            return array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::showScriptsAction',  '_route' => 'showScripts',);
        }

        // showLogs
        if ($pathinfo === '/logs') {
            return array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::showLogsAction',  '_route' => 'showLogs',);
        }

        // showPolicies
        if ($pathinfo === '/policies') {
            return array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::showPoliciesAction',  '_route' => 'showPolicies',);
        }

        if (0 === strpos($pathinfo, '/config')) {
            if (0 === strpos($pathinfo, '/config/repositorybackupscript')) {
                // getRepositoryBackupScript
                if ($pathinfo === '/config/repositorybackupscript/download') {
                    return array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::getRepositoryBackupScriptAction',  '_route' => 'getRepositoryBackupScript',);
                }

                // configureRepositoryBackupScript
                if ($pathinfo === '/config/repositorybackupscript/manage') {
                    return array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::configureRepositoryBackupScriptAction',  '_route' => 'configureRepositoryBackupScript',);
                }

            }

            // manageBackupsLocation
            if ($pathinfo === '/config/backupslocation') {
                return array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::manageBackupsLocationAction',  '_route' => 'manageBackupsLocation',);
            }

            // manageParameters
            if ($pathinfo === '/config/params') {
                return array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::manageParametersAction',  '_route' => 'manageParameters',);
            }

        }

        // changePassword
        if ($pathinfo === '/password') {
            return array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::changePasswordAction',  '_route' => 'changePassword',);
        }

        if (0 === strpos($pathinfo, '/script')) {
            // deleteScript
            if (preg_match('#^/script/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_deleteScript;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'deleteScript')), array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::deleteScriptAction',));
            }
            not_deleteScript:

            // downloadScript
            if (preg_match('#^/script/(?P<id>[^/]++)/download$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_downloadScript;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'downloadScript')), array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::downloadScriptAction',));
            }
            not_downloadScript:

            // editScript
            if (preg_match('#^/script/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_editScript;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'editScript')), array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::editScriptAction',));
            }
            not_editScript:

            // saveScript
            if (preg_match('#^/script(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_saveScript;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'saveScript')), array (  'id' => '-1',  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::saveScriptAction',));
            }
            not_saveScript:

        }

        if (0 === strpos($pathinfo, '/user')) {
            // deleteUser
            if (preg_match('#^/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_deleteUser;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'deleteUser')), array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::deleteUserAction',));
            }
            not_deleteUser:

            // editUser
            if (preg_match('#^/user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_editUser;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'editUser')), array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::editUserAction',));
            }
            not_editUser:

            // saveUser
            if (preg_match('#^/user(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_saveUser;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'saveUser')), array (  'id' => '-1',  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::saveUserAction',));
            }
            not_saveUser:

        }

        // setLocale
        if (0 === strpos($pathinfo, '/setlocale') && preg_match('#^/setlocale/(?P<locale>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'setLocale')), array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::setLanguage',));
        }

        // showUsers
        if ($pathinfo === '/users') {
            return array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::showUsersAction',  '_route' => 'showUsers',);
        }

        // cloneClient
        if (0 === strpos($pathinfo, '/client/clone') && preg_match('#^/client/clone/(?P<idClient>\\d+)$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_cloneClient;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'cloneClient')), array (  'id' => '-1',  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::cloneClientAction',));
        }
        not_cloneClient:

        // generateToken
        if ($pathinfo === '/job/generate/token/') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_generateToken;
            }

            return array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::generateTokenAction',  '_route' => 'generateToken',);
        }
        not_generateToken:

        // managePreferences
        if ($pathinfo === '/config/preferences') {
            return array (  '_controller' => 'Binovo\\ElkarBackupBundle\\Controller\\DefaultController::managePreferencesAction',  '_route' => 'managePreferences',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            // login_check
            if ($pathinfo === '/login_check') {
                return array('_route' => 'login_check');
            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        if (0 === strpos($pathinfo, '/tahoe')) {
            // tahoeConfig
            if ($pathinfo === '/tahoe/config') {
                return array (  '_controller' => 'Binovo\\ElkarTahoeBundle\\Controller\\DefaultController::tahoeConfigAction',  '_route' => 'tahoeConfig',);
            }

            // showJobTahoeBackup
            if (0 === strpos($pathinfo, '/tahoe/backup') && preg_match('#^/tahoe/backup/(?P<action>view|download|downloadzip)/(?P<file>.*)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_showJobTahoeBackup;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'showJobTahoeBackup')), array (  '_controller' => 'Binovo\\ElkarTahoeBundle\\Controller\\DefaultController::showJobTahoeBackupAction',));
            }
            not_showJobTahoeBackup:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
