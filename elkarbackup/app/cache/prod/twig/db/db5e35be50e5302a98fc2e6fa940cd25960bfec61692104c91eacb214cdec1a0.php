<?php

/* BinovoElkarBackupBundle:Default:clients.html.twig */
class __TwigTemplate_990df4c0a62a46429dec42983364cfa34cd15d112ea3cc9d168d72a7daa48051 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("BinovoElkarBackupBundle:Default:base.html.twig", "BinovoElkarBackupBundle:Default:clients.html.twig", 5);
        $this->blocks = array(
            'scripts' => array($this, 'block_scripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BinovoElkarBackupBundle:Default:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_scripts($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        $this->displayParentBlock("scripts", $context, $blocks);
        echo "
    ";
        // line 10
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "2c3c294_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2c3c294_0") : $this->env->getExtension('asset')->getAssetUrl("js/2c3c294_show-clients_1.js");
            // line 11
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "2c3c294"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2c3c294") : $this->env->getExtension('asset')->getAssetUrl("js/2c3c294.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        // line 16
        echo "
<div class=\"row\">
    <div class=\"col-md-12\" id=\"jobs-container\">

<!-- top action buttons -->
<div class=\"top-action-buttons pull-right\" style=\"padding-bottom: 10px;\">
  <!-- Disk usage -->
  ";
        // line 23
        if (((isset($context["fsDiskUsage"]) ? $context["fsDiskUsage"] : null) <= 80)) {
            // line 24
            echo "    ";
            $context["discIconClass"] = "ico-success";
            // line 25
            echo "    ";
            $context["discBarClass"] = "progress-bar-success";
            // line 26
            echo "  ";
        } elseif (((isset($context["fsDiskUsage"]) ? $context["fsDiskUsage"] : null) <= 90)) {
            // line 27
            echo "    ";
            $context["discIconClass"] = "ico-warning";
            // line 28
            echo "    ";
            $context["discBarClass"] = "progress-bar-warning";
            // line 29
            echo "  ";
        } elseif (((isset($context["fsDiskUsage"]) ? $context["fsDiskUsage"] : null) > 90)) {
            // line 30
            echo "    ";
            $context["discIconClass"] = "ico-danger";
            // line 31
            echo "    ";
            $context["discBarClass"] = "progress-bar-danger";
            // line 32
            echo "  ";
        }
        // line 33
        echo "
  <div id=\"disc-usage\">
    ";
        // line 35
        if (((isset($context["fsDiskUsage"]) ? $context["fsDiskUsage"] : null) <= 90)) {
            // line 36
            echo "  \t<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/img/disc-status.png"), "html", null, true);
            echo "\" alt=\"disc\" />
    ";
        } else {
            // line 38
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/img/disc-status-danger.png"), "html", null, true);
            echo "\" alt=\"disc\" />
    ";
        }
        // line 40
        echo "  \t<div id=\"usage-box\">
  \t\t<div id=\"usage\">
        <div class=\"tooltip-arrow\"></div>
  \t\t\t<div id=\"disc-status\" class=\"";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["discIconClass"]) ? $context["discIconClass"] : null), "html", null, true);
        echo "\"></div>
  \t\t\t<div id=\"disc-info\">
  \t\t\t\t<h3><span>Usage</span> ";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["fsDiskUsage"]) ? $context["fsDiskUsage"] : null), "html", null, true);
        echo "%</h3>
  \t\t\t\t<div class=\"progress\">
  \t\t\t\t\t<div class=\"progress-bar ";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["discBarClass"]) ? $context["discBarClass"] : null), "html", null, true);
        echo "\" role=\"progressbar\" aria-valuenow=\"15\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 15%;\">
  \t\t\t\t\t</div>
  \t\t\t\t</div>
  \t\t\t</div>
  \t\t</div>
  \t</div>
  </div>
  <!-- End disk usage-->
  <div class=\"btn-group\" role=\"group\" aria-label=\"...\">
    <button class=\"btn btn-default\" action=\"#\" eb-action=\"addClient\" eb-path=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("editClient", array("id" => "new"));
        echo "\">
      <span class=\"glyphicon glyphicon-plus\"></span> ";
        // line 57
        echo $this->env->getExtension('translator')->getTranslator()->trans("Add client", array(), "BinovoElkarBackup");
        // line 58
        echo "    </button>
  <button class=\"btn btn-default\" action=\"#\" eb-action=\"sortJobs\" eb-path=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("sortJobs");
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Sort jobs", array(), "BinovoElkarBackup");
        echo "</button>

  <div class=\"btn-group\" role=\"group\">
    <button class=\"btn btn-default dropdown-toggle\" type=\"button\" id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
      ";
        // line 63
        echo $this->env->getExtension('translator')->getTranslator()->trans("Actions", array(), "BinovoElkarBackup");
        // line 64
        echo "      <span class=\"caret\"></span>
    </button>
    <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
      <li><a href=\"#\" eb-action=\"runSelected\">";
        // line 67
        echo $this->env->getExtension('translator')->getTranslator()->trans("Run now", array(), "BinovoElkarBackup");
        echo "</a></li>
      <li role=\"separator\" class=\"divider\"></li>
      <li><a href=\"#\" eb-action=\"deleteSelected\">";
        // line 69
        echo $this->env->getExtension('translator')->getTranslator()->trans("Delete", array(), "BinovoElkarBackup");
        echo "</a></li>
    </ul>
  </div>
  </div>
</div>

<h3 id=\"legend\">";
        // line 75
        echo $this->env->getExtension('translator')->getTranslator()->trans("Jobs", array(), "BinovoElkarBackup");
        echo "</h3>


";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "clients"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 79
            echo "    <div class=\"controls help-block\">
        ";
            // line 80
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "<table id=\"clients\" class=\"table table-condensed table-hover\">
<tr>
  ";
        // line 86
        echo "  <th><input id=\"checkAll\" class=\"select-toggle-check\" type=\"checkbox\"</input></th>
  <th></th>
  <th>";
        // line 88
        echo $this->env->getExtension('translator')->getTranslator()->trans("Id", array(), "BinovoElkarBackup");
        echo "</th>
  <th>";
        // line 89
        echo $this->env->getExtension('translator')->getTranslator()->trans("Name", array(), "BinovoElkarBackup");
        echo "</th>
  <th style=\"text-align: center\">";
        // line 90
        echo $this->env->getExtension('translator')->getTranslator()->trans("Disk usage", array(), "BinovoElkarBackup");
        echo "</th>
  <th>";
        // line 91
        echo $this->env->getExtension('translator')->getTranslator()->trans("Last log entry", array(), "BinovoElkarBackup");
        echo "</th>
  <th>";
        // line 92
        echo $this->env->getExtension('translator')->getTranslator()->trans("Status", array(), "BinovoElkarBackup");
        echo "</th>
  <!--<th>";
        // line 93
        echo $this->env->getExtension('translator')->getTranslator()->trans("Active", array(), "BinovoElkarBackup");
        echo "</th>-->
  <th>";
        // line 94
        echo $this->env->getExtension('translator')->getTranslator()->trans("Actions", array(), "BinovoElkarBackup");
        echo "</th>
</tr>

    ";
        // line 98
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 99
            echo "      ";
            // line 100
            echo "      ";
            if ((twig_length_filter($this->env, (($this->getAttribute($this->getAttribute($context["client"], "logEntry", array(), "any", false, true), "message", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["client"], "logEntry", array(), "any", false, true), "message", array()), "")) : (""))) > 50)) {
                // line 101
                echo "        ";
                $context["clientstatus"] = (twig_slice($this->env, (($this->getAttribute($this->getAttribute($context["client"], "logEntry", array(), "any", false, true), "message", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["client"], "logEntry", array(), "any", false, true), "message", array()), "")) : ("")), 0, 50) . "...");
                // line 102
                echo "      ";
            } else {
                // line 103
                echo "        ";
                $context["clientstatus"] = twig_slice($this->env, (($this->getAttribute($this->getAttribute($context["client"], "logEntry", array(), "any", false, true), "message", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["client"], "logEntry", array(), "any", false, true), "message", array()), "")) : ("")), 0, 50);
                // line 104
                echo "      ";
            }
            // line 105
            echo "
<tr id=\"client-";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "id", array()), "html", null, true);
            echo "\" class=\"client-row client-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "id", array()), "html", null, true);
            echo " ";
            if (($this->getAttribute($context["client"], "isActive", array()) == false)) {
                echo "disabled";
            }
            echo "\">
  <td><input class=\"select-toggle-check\" type=\"checkbox\" value=\"client";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "id", array()), "html", null, true);
            echo "\"</input></td>
  <td><span class=\"client-icon\"></span></td>
  <td class=\"vert-align id\"><a data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
            // line 109
            echo $this->env->getExtension('translator')->getTranslator()->trans("Edit client", array(), "BinovoElkarBackup");
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editClient", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "id", array()), "html", null, true);
            echo "</a></td>
  <td class=\"vert-align name\"><a data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
            // line 110
            echo $this->env->getExtension('translator')->getTranslator()->trans("Edit client", array(), "BinovoElkarBackup");
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editClient", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "name", array()), "html", null, true);
            echo "</a></td>
  <td class=\"vert-align diskusage\" style=\"text-align:center";
            // line 111
            if ((($this->getAttribute($context["client"], "quota", array()) > 0) && (($this->getAttribute($context["client"], "diskUsage", array()) / $this->getAttribute($context["client"], "quota", array())) > (isset($context["warning_load_level"]) ? $context["warning_load_level"] : null)))) {
                echo ";color:red";
            }
            echo "\">";
            if ((($this->getAttribute($context["client"], "diskUsage", array()) / 1024) > 1024)) {
                echo " ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($this->getAttribute($context["client"], "diskUsage", array()) / 1024) / 1024), 1), "html", null, true);
                echo " GB";
            } else {
                echo " ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($this->getAttribute($context["client"], "diskUsage", array()) / 1024), 0), "html", null, true);
                echo " MB";
            }
            if (($this->getAttribute($context["client"], "quota", array()) > 0)) {
                echo " (";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($this->getAttribute($context["client"], "diskUsage", array()) / $this->getAttribute($context["client"], "quota", array())) * 100), 0), "html", null, true);
                echo "%)";
            }
            echo "</td>
  <td class=\"vert-align logentry\"> <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
            // line 112
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($context["client"], "logEntry", array(), "any", false, true), "dateTime", array(), "any", false, true), "format", array(0 => "Y-m-d H:i:s"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($context["client"], "logEntry", array(), "any", false, true), "dateTime", array(), "any", false, true), "format", array(0 => "Y-m-d H:i:s"), "method"), "")) : ("")), "html", null, true);
            echo "\" href=\"logs?filter[gte][l.level]=0&filter[eq][l.source]=&filter[like][l.link]=%2Fclient%2F";
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "id", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($context["client"], "logEntry", array(), "any", false, true), "dateTime", array(), "any", false, true), "format", array(0 => "Y-m-d H:i:s"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($context["client"], "logEntry", array(), "any", false, true), "dateTime", array(), "any", false, true), "format", array(0 => "Y-m-d H:i:s"), "method"), "")) : ("")), "html", null, true);
            echo " </a></td>
  <td class=\"vert-align status\"><span class=\"label
    ";
            // line 114
            if ($this->getAttribute($context["client"], "isActive", array())) {
                // line 115
                echo "      ";
                if (((($this->getAttribute($this->getAttribute($context["client"], "logEntry", array(), "any", false, true), "levelName", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["client"], "logEntry", array(), "any", false, true), "levelName", array()), "")) : ("")) == "ERROR")) {
                    echo "label-danger
      ";
                } else {
                    // line 117
                    echo "        ";
                    if (((isset($context["clientstatus"]) ? $context["clientstatus"] : null) == "QUEUED")) {
                        echo "label-info
        ";
                    } elseif ((                    // line 118
(isset($context["clientstatus"]) ? $context["clientstatus"] : null) == "RUNNING")) {
                        echo "label-primary
        ";
                    } elseif ((                    // line 119
(isset($context["clientstatus"]) ? $context["clientstatus"] : null) == "FAIL")) {
                        echo "label-danger
        ";
                    } else {
                        // line 120
                        echo "label-success
        ";
                    }
                    // line 122
                    echo "      ";
                }
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["clientstatus"]) ? $context["clientstatus"] : null), "html", null, true);
                echo "</span>
    ";
            } else {
                // line 123
                echo "label-default\">INACTIVE</span>
    ";
            }
            // line 125
            echo "  </td>
  <!--<td class=\"vert-align isactive\">";
            // line 126
            if ($this->getAttribute($context["client"], "isActive", array())) {
                echo $this->env->getExtension('translator')->getTranslator()->trans("Active", array(), "BinovoElkarBackup");
            } else {
                echo $this->env->getExtension('translator')->getTranslator()->trans("Inactive", array(), "BinovoElkarBackup");
            }
            echo "</td>-->
  <td class=\"actions vert-align\">

    <div class=\"btn-group\" role=\"group\" aria-label=\"Actions\">
        <button type=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
            // line 130
            echo $this->env->getExtension('translator')->getTranslator()->trans("Edit client", array(), "BinovoElkarBackup");
            echo "\" class=\"btn btn-default\" href=\"#\" eb-action=\"editClient\" eb-path=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editClient", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\" eb-clientid=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "id", array()), "html", null, true);
            echo "\">
          <span class=\"glyphicon glyphicon-pencil\"></span>
        </button>
        <button type=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
            // line 133
            echo $this->env->getExtension('translator')->getTranslator()->trans("Add job", array(), "BinovoElkarBackup");
            echo "\" class=\"btn btn-default\" href=\"#\" eb-action=\"addJob\" eb-path=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editJob", array("idJob" => "new", "idClient" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\" eb-clientid=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "id", array()), "html", null, true);
            echo "\">
          <span class=\"glyphicon glyphicon-plus\"></span>
        </button>
        <div class=\"btn-group\" role=\"group\">
          <button id=\"btnGroupDrop1\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" type=\"button\">
            ";
            // line 138
            echo $this->env->getExtension('translator')->getTranslator()->trans("More", array(), "BinovoElkarBackup");
            // line 139
            echo "            <span class=\"caret-right\"></span>
          </button>
          <ul class=\"dropdown-menu dropright\" aria-labelledby=\"btnGroupDrop1\">
            <li><a href=\"#\" eb-action=\"runClient\" eb-clientid=\"";
            // line 142
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "id", array()), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Run now", array(), "BinovoElkarBackup");
            echo "</a></li>
            <li><a href=\"#\" eb-action=\"cloneClient\" eb-path=\"";
            // line 143
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cloneClient", array("idClient" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\" eb-clientid=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "id", array()), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Clone", array(), "BinovoElkarBackup");
            echo "</a></li>
            <li role=\"separator\" class=\"divider\"></li>
            <li><a href=\"#\" eb-action=\"deleteClient\" eb-path=\"";
            // line 145
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("deleteClient", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\" eb-clientid=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "id", array()), "html", null, true);
            echo "\" eb-message=\"";
            echo $this->env->getExtension('translator')->trans("Really delete client <strong>%name%</strong>? <br><br>This will remove all related jobs and backups", array("%name%" => $this->getAttribute($context["client"], "name", array())), "BinovoElkarBackup");
            echo "\" class=\"danger\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Delete", array(), "BinovoElkarBackup");
            echo "</a></li>
          </ul>
        </div>
    </div>

  </td>
</tr>


  ";
            // line 154
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["client"], "jobs", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
                // line 155
                echo "
<tr id=\"job-";
                // line 156
                echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "id", array()), "html", null, true);
                echo "\" class=\"job-row client-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "id", array()), "html", null, true);
                echo " job-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "id", array()), "html", null, true);
                echo " ";
                if ((($this->getAttribute($context["job"], "isActive", array()) == false) || ($this->getAttribute($context["client"], "isActive", array()) == false))) {
                    echo "disabled";
                }
                echo "\">
  <td><input class=\"select-toggle-check\" type=\"checkbox\" value=\"job";
                // line 157
                echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "job", array()), "html", null, true);
                echo "\"</input></td>
  <td><span class=\"glyphicon glyphicon-folder-open\"></span></td>
  <td class=\"vert-align id\"><a data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                // line 159
                echo $this->env->getExtension('translator')->getTranslator()->trans("Edit Job", array(), "BinovoElkarBackup");
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editJob", array("idClient" => $this->getAttribute($context["client"], "id", array()), "idJob" => $this->getAttribute($context["job"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "id", array()), "html", null, true);
                echo ".";
                echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "id", array()), "html", null, true);
                echo "</a></td>
  <td class=\"vert-align name\"><a data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                // line 160
                echo $this->env->getExtension('translator')->getTranslator()->trans("Edit Job", array(), "BinovoElkarBackup");
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editJob", array("idClient" => $this->getAttribute($context["client"], "id", array()), "idJob" => $this->getAttribute($context["job"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (($this->getAttribute($context["client"], "name", array()) . "/") . $this->getAttribute($context["job"], "name", array())), "html", null, true);
                echo "</a></td>
  <td class=\"vert-align diskusage\" style=\"text-align:center;\">";
                // line 161
                if ((($this->getAttribute($context["job"], "diskUsage", array()) / 1024) > 1024)) {
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($this->getAttribute($context["job"], "diskUsage", array()) / 1024) / 1024), 1), "html", null, true);
                    echo " GB";
                } else {
                    echo " ";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($this->getAttribute($context["job"], "diskUsage", array()) / 1024), 0), "html", null, true);
                    echo " MB";
                }
                echo "</td>
  <td class=\"vert-align logentry\"> <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                // line 162
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($context["job"], "logEntry", array(), "any", false, true), "dateTime", array(), "any", false, true), "format", array(0 => "Y-m-d H:i:s"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($context["job"], "logEntry", array(), "any", false, true), "dateTime", array(), "any", false, true), "format", array(0 => "Y-m-d H:i:s"), "method"), "")) : ("")), "html", null, true);
                echo "\" href=\"logs?filter[gte][l.level]=0&filter[eq][l.source]=&filter[like][l.link]=%2Fclient%2F";
                echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "id", array()), "html", null, true);
                echo "%2Fjob%2F";
                echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "id", array()), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($context["job"], "logEntry", array(), "any", false, true), "dateTime", array(), "any", false, true), "format", array(0 => "Y-m-d H:i:s"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($context["job"], "logEntry", array(), "any", false, true), "dateTime", array(), "any", false, true), "format", array(0 => "Y-m-d H:i:s"), "method"), "")) : ("")), "html", null, true);
                echo "</a></td>
  <td class=\"vert-align status\"><span class=\"label
    ";
                // line 164
                if (($this->getAttribute($context["job"], "isActive", array()) && $this->getAttribute($context["client"], "isActive", array()))) {
                    // line 165
                    echo "      ";
                    if (((($this->getAttribute($this->getAttribute($context["job"], "logEntry", array(), "any", false, true), "levelName", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["job"], "logEntry", array(), "any", false, true), "levelName", array()), "")) : ("")) == "ERROR")) {
                        echo "label-danger
      ";
                    } elseif (((($this->getAttribute($this->getAttribute(                    // line 166
$context["job"], "logEntry", array(), "any", false, true), "levelName", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["job"], "logEntry", array(), "any", false, true), "levelName", array()), "")) : ("")) == "WARNING")) {
                        echo "label-warning
      ";
                    } else {
                        // line 168
                        echo "        ";
                        if (($this->getAttribute($context["job"], "status", array()) == "QUEUED")) {
                            echo "label-info
        ";
                        } elseif (($this->getAttribute(                        // line 169
$context["job"], "status", array()) == "RUNNING")) {
                            echo "label-primary
        ";
                        } elseif (($this->getAttribute(                        // line 170
$context["job"], "status", array()) == "FAIL")) {
                            echo "label-danger
        ";
                        } else {
                            // line 171
                            echo "label-success
        ";
                        }
                        // line 173
                        echo "      ";
                    }
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "status", array()), "html", null, true);
                    echo "</span>
    ";
                } else {
                    // line 174
                    echo "label-default\">INACTIVE</span>
    ";
                }
                // line 176
                echo "  </td>
  <!--<td class=\"vert-align isactive\">";
                // line 177
                if ($this->getAttribute($context["job"], "isActive", array())) {
                    echo $this->env->getExtension('translator')->getTranslator()->trans("Active", array(), "BinovoElkarBackup");
                } else {
                    echo $this->env->getExtension('translator')->getTranslator()->trans("Inactive", array(), "BinovoElkarBackup");
                }
                echo "</td>-->
  <td class=\"vert-align actions\">

    <div class=\"btn-group\" role=\"group\" aria-label=\"Actions\">
        <button type=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                // line 181
                echo $this->env->getExtension('translator')->getTranslator()->trans("Edit Job", array(), "BinovoElkarBackup");
                echo "\" class=\"btn btn-default\" href=\"#\" eb-action=\"editJob\" eb-path=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editJob", array("idClient" => $this->getAttribute($context["client"], "id", array()), "idJob" => $this->getAttribute($context["job"], "id", array()))), "html", null, true);
                echo "\" eb-jobid=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "id", array()), "html", null, true);
                echo "\">
          <span class=\"glyphicon glyphicon-pencil\"></span>
        </button>
        <button type=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                // line 184
                echo $this->env->getExtension('translator')->getTranslator()->trans("Restore", array(), "BinovoElkarBackup");
                echo "\" class=\"btn btn-default ";
                if ( !$this->getAttribute($context["job"], "hasBackups", array())) {
                    echo "disabled";
                }
                echo "\" href=\"#\" ";
                if ($this->getAttribute($context["job"], "hasBackups", array())) {
                    echo "eb-action=\"showJobBackup\"";
                }
                echo " eb-path=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("showJobBackup", array("action" => "view", "idClient" => $this->getAttribute($context["client"], "id", array()), "idJob" => $this->getAttribute($context["job"], "id", array()))), "html", null, true);
                echo "\" eb-jobid=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "id", array()), "html", null, true);
                echo "\" id=\"btnRestore";
                echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "id", array()), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "id", array()), "html", null, true);
                echo "\">
          <span class=\"glyphicon glyphicon-cloud-download\"></span>
        </button>
        <div class=\"btn-group\" role=\"group\">
          <button id=\"btnGroupDrop1\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" type=\"button\">
            ";
                // line 189
                echo $this->env->getExtension('translator')->getTranslator()->trans("More", array(), "BinovoElkarBackup");
                // line 190
                echo "            <span class=\"caret-right\"></span>
          </button>
          <ul class=\"dropdown-menu dropright\" aria-labelledby=\"btnGroupDrop1\">
            <li ";
                // line 193
                if ((($this->getAttribute($context["job"], "status", array()) == "RUNNING") || ($this->getAttribute($context["job"], "status", array()) == "QUEUED"))) {
                    echo "class=\"disabled\"";
                }
                echo "><a href=\"#\" eb-action=\"runJob\" eb-path=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("runJob", array("idJob" => $this->getAttribute($context["job"], "id", array()), "idClient" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
                echo "\" eb-jobid=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "id", array()), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('translator')->getTranslator()->trans("Run now", array(), "BinovoElkarBackup");
                echo "</a></li>
            <li ";
                // line 194
                if ((($this->getAttribute($context["job"], "status", array()) != "RUNNING") && ($this->getAttribute($context["job"], "status", array()) != "QUEUED"))) {
                    echo "class=\"disabled\"";
                }
                echo "><a href=\"#\" eb-action=\"abortJob\" eb-path=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("abortJob", array("idJob" => $this->getAttribute($context["job"], "id", array()), "idClient" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
                echo "\" eb-jobid=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "id", array()), "html", null, true);
                echo "\" eb-message=\"";
                echo $this->env->getExtension('translator')->trans("Job <strong>%name%</strong> is running. Do you really want to abort it ?", array("%name%" => $this->getAttribute($context["job"], "name", array())), "BinovoElkarBackup");
                echo "\" class=\"danger\">";
                echo $this->env->getExtension('translator')->getTranslator()->trans("Abort", array(), "BinovoElkarBackup");
                echo "</a></li>
            <li role=\"separator\" class=\"divider\"></li>
            <li><a href=\"#\" eb-action=\"deleteJob\" eb-path=\"";
                // line 196
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("deleteJob", array("idClient" => $this->getAttribute($context["client"], "id", array()), "idJob" => $this->getAttribute($context["job"], "id", array()))), "html", null, true);
                echo "\" eb-jobid=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "id", array()), "html", null, true);
                echo "\" eb-clientid=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "id", array()), "html", null, true);
                echo "\" eb-message=\"";
                echo $this->env->getExtension('translator')->trans("Really delete job <strong>%name%</strong>?<br><br>This will remove all related backups", array("%name%" => $this->getAttribute($context["job"], "name", array())), "BinovoElkarBackup");
                echo "\" class=\"danger\">";
                echo $this->env->getExtension('translator')->getTranslator()->trans("Delete", array(), "BinovoElkarBackup");
                echo "</a></li>
          </ul>
        </div>
    </div>

  </td>
</tr>

  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 206
        echo "</table>


<div class=\"pull-right\" style=\"padding-bottom: 10px;\">
  <div class=\"btn-group\" role=\"group\" aria-label=\"...\">
    <button class=\"btn btn-default\" action=\"#\" eb-action=\"addClient\" eb-path=\"";
        // line 211
        echo $this->env->getExtension('routing')->getPath("editClient", array("id" => "new"));
        echo "\">
      <span class=\"glyphicon glyphicon-plus\"></span> ";
        // line 212
        echo $this->env->getExtension('translator')->getTranslator()->trans("Add client", array(), "BinovoElkarBackup");
        // line 213
        echo "    </button>
  <button class=\"btn btn-default\" action=\"#\" eb-action=\"sortJobs\" eb-path=\"";
        // line 214
        echo $this->env->getExtension('routing')->getPath("sortJobs");
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Sort jobs", array(), "BinovoElkarBackup");
        echo "</button>

  <div class=\"btn-group dropup\" role=\"group\">
    <button class=\"btn btn-default dropdown-toggle\" type=\"button\" id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
      ";
        // line 218
        echo $this->env->getExtension('translator')->getTranslator()->trans("Actions", array(), "BinovoElkarBackup");
        // line 219
        echo "      <span class=\"caret\"></span>
    </button>
    <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
      <li><a href=\"#\" eb-action=\"runSelected\">";
        // line 222
        echo $this->env->getExtension('translator')->getTranslator()->trans("Run now", array(), "BinovoElkarBackup");
        echo "</a></li>
      <li role=\"separator\" class=\"divider\"></li>
      <li><a href=\"#\" eb-action=\"deleteSelected\">";
        // line 224
        echo $this->env->getExtension('translator')->getTranslator()->trans("Delete", array(), "BinovoElkarBackup");
        echo "</a></li>
    </ul>
  </div>
  </div>
</div>

<div class=\"navigation binovo-pagination\">
    ";
        // line 231
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : null));
        echo "
</div>
</div>
</div>

<div id=\"footer\"></div>


<!--
MODALS
-->
<div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"deleteModal\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content panel-danger\">
      <div class=\"modal-header panel-heading\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        <h4 class=\"modal-title\" id=\"exampleModalLabel\">Danger zone!</h4>
      </div>
      <div class=\"modal-body\">
        <span class=\"modal-message\">message</span>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancel</button>
        <button type=\"button\" class=\"btn btn-danger\" action=\"#\" eb-action=\"\" eb-path=\"\" eb-jobid=\"\" eb-clientid=\"\" eb-action-confirmed=\"\">Delete</button>
      </div>
    </div>
  </div>
</div>

<div class=\"modal fade\" id=\"abortModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"abortModal\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content panel-danger\">
      <div class=\"modal-header panel-heading\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        <h4 class=\"modal-title\" id=\"exampleModalLabel\">Danger zone!</h4>
      </div>
      <div class=\"modal-body\">
        <span class=\"modal-message\">message</span>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancel</button>
        <button type=\"button\" class=\"btn btn-danger\" action=\"#\" eb-action=\"\" eb-path=\"\" eb-jobid=\"\" eb-clientid=\"\" eb-action-confirmed=\"\">Abort job</button>
      </div>
    </div>
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "BinovoElkarBackupBundle:Default:clients.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  703 => 231,  693 => 224,  688 => 222,  683 => 219,  681 => 218,  672 => 214,  669 => 213,  667 => 212,  663 => 211,  656 => 206,  629 => 196,  614 => 194,  602 => 193,  597 => 190,  595 => 189,  572 => 184,  562 => 181,  551 => 177,  548 => 176,  544 => 174,  536 => 173,  532 => 171,  527 => 170,  523 => 169,  518 => 168,  513 => 166,  508 => 165,  506 => 164,  495 => 162,  484 => 161,  476 => 160,  466 => 159,  461 => 157,  449 => 156,  446 => 155,  442 => 154,  424 => 145,  415 => 143,  409 => 142,  404 => 139,  402 => 138,  390 => 133,  380 => 130,  369 => 126,  366 => 125,  362 => 123,  354 => 122,  350 => 120,  345 => 119,  341 => 118,  336 => 117,  330 => 115,  328 => 114,  319 => 112,  298 => 111,  290 => 110,  282 => 109,  277 => 107,  267 => 106,  264 => 105,  261 => 104,  258 => 103,  255 => 102,  252 => 101,  249 => 100,  247 => 99,  242 => 98,  236 => 94,  232 => 93,  228 => 92,  224 => 91,  220 => 90,  216 => 89,  212 => 88,  208 => 86,  204 => 83,  195 => 80,  192 => 79,  188 => 78,  182 => 75,  173 => 69,  168 => 67,  163 => 64,  161 => 63,  152 => 59,  149 => 58,  147 => 57,  143 => 56,  131 => 47,  126 => 45,  121 => 43,  116 => 40,  110 => 38,  104 => 36,  102 => 35,  98 => 33,  95 => 32,  92 => 31,  89 => 30,  86 => 29,  83 => 28,  80 => 27,  77 => 26,  74 => 25,  71 => 24,  69 => 23,  60 => 16,  57 => 15,  41 => 11,  37 => 10,  32 => 9,  29 => 8,  11 => 5,);
    }
}
/* {##*/
/*  # @copyright 2012,2013 Binovo it Human Project, S.L.*/
/*  # @license http://www.opensource.org/licenses/bsd-license.php New-BSD*/
/*  #}*/
/* {% extends 'BinovoElkarBackupBundle:Default:base.html.twig' %}*/
/* {% trans_default_domain 'BinovoElkarBackup' %}*/
/* */
/* {% block scripts %}*/
/*     {{ parent() }}*/
/*     {% javascripts '@BinovoElkarBackupBundle/Resources/public/js/show-clients.js' %}*/
/*         <script type="text/javascript" src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* <div class="row">*/
/*     <div class="col-md-12" id="jobs-container">*/
/* */
/* <!-- top action buttons -->*/
/* <div class="top-action-buttons pull-right" style="padding-bottom: 10px;">*/
/*   <!-- Disk usage -->*/
/*   {% if fsDiskUsage <= 80 %}*/
/*     {% set discIconClass = "ico-success" %}*/
/*     {% set discBarClass = "progress-bar-success" %}*/
/*   {% elseif fsDiskUsage <= 90 %}*/
/*     {% set discIconClass = "ico-warning" %}*/
/*     {% set discBarClass = "progress-bar-warning" %}*/
/*   {% elseif fsDiskUsage > 90 %}*/
/*     {% set discIconClass = "ico-danger" %}*/
/*     {% set discBarClass = "progress-bar-danger" %}*/
/*   {% endif %}*/
/* */
/*   <div id="disc-usage">*/
/*     {% if fsDiskUsage <= 90 %}*/
/*   	<img src="{{ asset('/img/disc-status.png') }}" alt="disc" />*/
/*     {% else %}*/
/*     <img src="{{ asset('/img/disc-status-danger.png') }}" alt="disc" />*/
/*     {% endif %}*/
/*   	<div id="usage-box">*/
/*   		<div id="usage">*/
/*         <div class="tooltip-arrow"></div>*/
/*   			<div id="disc-status" class="{{ discIconClass }}"></div>*/
/*   			<div id="disc-info">*/
/*   				<h3><span>Usage</span> {{ fsDiskUsage }}%</h3>*/
/*   				<div class="progress">*/
/*   					<div class="progress-bar {{ discBarClass }}" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width: 15%;">*/
/*   					</div>*/
/*   				</div>*/
/*   			</div>*/
/*   		</div>*/
/*   	</div>*/
/*   </div>*/
/*   <!-- End disk usage-->*/
/*   <div class="btn-group" role="group" aria-label="...">*/
/*     <button class="btn btn-default" action="#" eb-action="addClient" eb-path="{{ path('editClient', {id: 'new'}) }}">*/
/*       <span class="glyphicon glyphicon-plus"></span> {% trans %}Add client{% endtrans %}*/
/*     </button>*/
/*   <button class="btn btn-default" action="#" eb-action="sortJobs" eb-path="{{ path('sortJobs') }}">{% trans %}Sort jobs{% endtrans %}</button>*/
/* */
/*   <div class="btn-group" role="group">*/
/*     <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">*/
/*       {% trans %}Actions{% endtrans %}*/
/*       <span class="caret"></span>*/
/*     </button>*/
/*     <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">*/
/*       <li><a href="#" eb-action="runSelected">{% trans %}Run now{% endtrans %}</a></li>*/
/*       <li role="separator" class="divider"></li>*/
/*       <li><a href="#" eb-action="deleteSelected">{% trans %}Delete{% endtrans %}</a></li>*/
/*     </ul>*/
/*   </div>*/
/*   </div>*/
/* </div>*/
/* */
/* <h3 id="legend">{% trans %}Jobs{% endtrans %}</h3>*/
/* */
/* */
/* {% for flashMessage in app.session.flashbag.get('clients') %}*/
/*     <div class="controls help-block">*/
/*         {{ flashMessage }}*/
/*     </div>*/
/* {% endfor %}*/
/* <table id="clients" class="table table-condensed table-hover">*/
/* <tr>*/
/*   {# sorting of properties based on query components #}*/
/*   <th><input id="checkAll" class="select-toggle-check" type="checkbox"</input></th>*/
/*   <th></th>*/
/*   <th>{% trans %}Id{% endtrans %}</th>*/
/*   <th>{% trans %}Name{% endtrans %}</th>*/
/*   <th style="text-align: center">{% trans %}Disk usage{% endtrans %}</th>*/
/*   <th>{% trans %}Last log entry{% endtrans %}</th>*/
/*   <th>{% trans %}Status{% endtrans %}</th>*/
/*   <!--<th>{% trans %}Active{% endtrans %}</th>-->*/
/*   <th>{% trans %}Actions{% endtrans %}</th>*/
/* </tr>*/
/* */
/*     {# table body #}*/
/*     {% for client in pagination %}*/
/*       {# set clientstatus #}*/
/*       {%  if client.logEntry.message|default('')|length > 50 %}*/
/*         {% set clientstatus = client.logEntry.message|default('')|slice(0, 50) ~ '...' %}*/
/*       {% else %}*/
/*         {% set clientstatus = client.logEntry.message|default('')|slice(0, 50) %}*/
/*       {% endif %}*/
/* */
/* <tr id="client-{{client.id}}" class="client-row client-{{client.id}} {% if client.isActive == false %}disabled{% endif %}">*/
/*   <td><input class="select-toggle-check" type="checkbox" value="client{{client.id}}"</input></td>*/
/*   <td><span class="client-icon"></span></td>*/
/*   <td class="vert-align id"><a data-toggle="tooltip" data-placement="top" title="{% trans %}Edit client{% endtrans %}" href="{{ path('editClient', {id: client.id}) }}"> {{ client.id }}</a></td>*/
/*   <td class="vert-align name"><a data-toggle="tooltip" data-placement="top" title="{% trans %}Edit client{% endtrans %}" href="{{ path('editClient', {id: client.id}) }}">{{ client.name }}</a></td>*/
/*   <td class="vert-align diskusage" style="text-align:center{% if client.quota > 0 and client.diskUsage / client.quota > warning_load_level %};color:red{% endif %}">{% if client.diskUsage / 1024 > 1024 %} {{ (client.diskUsage / 1024 / 1024 ) | number_format(1) }} GB{% else %} {{ (client.diskUsage / 1024) | number_format(0)}} MB{% endif %}{% if client.quota > 0 %} ({{ (client.diskUsage / client.quota * 100) | number_format(0)}}%){% endif %}</td>*/
/*   <td class="vert-align logentry"> <a data-toggle="tooltip" data-placement="top" title="{{ client.logEntry.dateTime.format('Y-m-d H:i:s')|default('') }}" href="logs?filter[gte][l.level]=0&filter[eq][l.source]=&filter[like][l.link]=%2Fclient%2F{{ client.id }}"> {{ client.logEntry.dateTime.format('Y-m-d H:i:s')|default('') }} </a></td>*/
/*   <td class="vert-align status"><span class="label*/
/*     {% if client.isActive %}*/
/*       {% if (client.logEntry.levelName)|default('') == 'ERROR'%}label-danger*/
/*       {% else %}*/
/*         {% if clientstatus == 'QUEUED' %}label-info*/
/*         {% elseif clientstatus == 'RUNNING' %}label-primary*/
/*         {% elseif clientstatus == 'FAIL' %}label-danger*/
/*         {% else %}label-success*/
/*         {% endif %}*/
/*       {% endif %}">{{ clientstatus }}</span>*/
/*     {% else %}label-default">INACTIVE</span>*/
/*     {% endif %}*/
/*   </td>*/
/*   <!--<td class="vert-align isactive">{% if client.isActive %}{% trans %}Active{% endtrans%}{% else%}{% trans %}Inactive{% endtrans%}{% endif %}</td>-->*/
/*   <td class="actions vert-align">*/
/* */
/*     <div class="btn-group" role="group" aria-label="Actions">*/
/*         <button type="button" data-toggle="tooltip" data-placement="top" title="{% trans %}Edit client{% endtrans %}" class="btn btn-default" href="#" eb-action="editClient" eb-path="{{ path('editClient', {id: client.id}) }}" eb-clientid="{{client.id}}">*/
/*           <span class="glyphicon glyphicon-pencil"></span>*/
/*         </button>*/
/*         <button type="button" data-toggle="tooltip" data-placement="top" title="{% trans %}Add job{% endtrans %}" class="btn btn-default" href="#" eb-action="addJob" eb-path="{{ path('editJob', {idJob: 'new', idClient: client.id}) }}" eb-clientid="{{client.id}}">*/
/*           <span class="glyphicon glyphicon-plus"></span>*/
/*         </button>*/
/*         <div class="btn-group" role="group">*/
/*           <button id="btnGroupDrop1" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" type="button">*/
/*             {% trans %}More{% endtrans %}*/
/*             <span class="caret-right"></span>*/
/*           </button>*/
/*           <ul class="dropdown-menu dropright" aria-labelledby="btnGroupDrop1">*/
/*             <li><a href="#" eb-action="runClient" eb-clientid="{{client.id}}">{% trans %}Run now{% endtrans %}</a></li>*/
/*             <li><a href="#" eb-action="cloneClient" eb-path="{{ path('cloneClient', {idClient: client.id}) }}" eb-clientid="{{client.id}}">{% trans %}Clone{% endtrans %}</a></li>*/
/*             <li role="separator" class="divider"></li>*/
/*             <li><a href="#" eb-action="deleteClient" eb-path="{{ path('deleteClient', {id: client.id}) }}" eb-clientid="{{client.id}}" eb-message="{{ 'Really delete client <strong>%name%</strong>? <br><br>This will remove all related jobs and backups' | trans({'%name%': client.name}) | raw }}" class="danger">{% trans %}Delete{% endtrans %}</a></li>*/
/*           </ul>*/
/*         </div>*/
/*     </div>*/
/* */
/*   </td>*/
/* </tr>*/
/* */
/* */
/*   {% for job in client.jobs %}*/
/* */
/* <tr id="job-{{job.id}}" class="job-row client-{{client.id}} job-{{job.id}} {% if (job.isActive == false) or (client.isActive == false) %}disabled{% endif %}">*/
/*   <td><input class="select-toggle-check" type="checkbox" value="job{{client.job}}"</input></td>*/
/*   <td><span class="glyphicon glyphicon-folder-open"></span></td>*/
/*   <td class="vert-align id"><a data-toggle="tooltip" data-placement="top" title="{% trans %}Edit Job{% endtrans %}" href="{{ path('editJob', {idClient: client.id, idJob:job.id}) }}">{{ client.id }}.{{ job.id }}</a></td>*/
/*   <td class="vert-align name"><a data-toggle="tooltip" data-placement="top" title="{% trans %}Edit Job{% endtrans %}" href="{{ path('editJob', {idClient: client.id, idJob:job.id}) }}">{{ client.name ~ "/" ~ job.name }}</a></td>*/
/*   <td class="vert-align diskusage" style="text-align:center;">{% if job.diskUsage / 1024 > 1024 %}{{ (job.diskUsage / 1024 / 1024) | number_format(1) }} GB{% else%} {{ (job.diskUsage / 1024) | number_format(0)}} MB{% endif %}</td>*/
/*   <td class="vert-align logentry"> <a data-toggle="tooltip" data-placement="top" title="{{ job.logEntry.dateTime.format('Y-m-d H:i:s')|default('') }}" href="logs?filter[gte][l.level]=0&filter[eq][l.source]=&filter[like][l.link]=%2Fclient%2F{{ client.id }}%2Fjob%2F{{ job.id }}"> {{ job.logEntry.dateTime.format('Y-m-d H:i:s')|default('') }}</a></td>*/
/*   <td class="vert-align status"><span class="label*/
/*     {% if (job.isActive) and (client.isActive) %}*/
/*       {% if (job.logEntry.levelName)|default('') == 'ERROR'%}label-danger*/
/*       {% elseif (job.logEntry.levelName)|default('') == 'WARNING'%}label-warning*/
/*       {% else %}*/
/*         {% if job.status == 'QUEUED' %}label-info*/
/*         {% elseif job.status == 'RUNNING' %}label-primary*/
/*         {% elseif job.status == 'FAIL' %}label-danger*/
/*         {% else %}label-success*/
/*         {% endif %}*/
/*       {% endif %}">{{ job.status }}</span>*/
/*     {% else %}label-default">INACTIVE</span>*/
/*     {% endif %}*/
/*   </td>*/
/*   <!--<td class="vert-align isactive">{% if job.isActive %}{% trans %}Active{% endtrans%}{% else %}{% trans %}Inactive{% endtrans%}{% endif %}</td>-->*/
/*   <td class="vert-align actions">*/
/* */
/*     <div class="btn-group" role="group" aria-label="Actions">*/
/*         <button type="button" data-toggle="tooltip" data-placement="top" title="{% trans %}Edit Job{% endtrans %}" class="btn btn-default" href="#" eb-action="editJob" eb-path="{{ path('editJob', {idClient: client.id, idJob:job.id}) }}" eb-jobid="{{job.id}}">*/
/*           <span class="glyphicon glyphicon-pencil"></span>*/
/*         </button>*/
/*         <button type="button" data-toggle="tooltip" data-placement="top" title="{% trans %}Restore{% endtrans %}" class="btn btn-default {% if not job.hasBackups %}disabled{% endif %}" href="#" {% if job.hasBackups %}eb-action="showJobBackup"{% endif %} eb-path="{{ path('showJobBackup', {action: 'view', idClient: client.id, idJob:job.id}) }}" eb-jobid="{{job.id}}" id="btnRestore{{ client.id }}{{ job.id }}">*/
/*           <span class="glyphicon glyphicon-cloud-download"></span>*/
/*         </button>*/
/*         <div class="btn-group" role="group">*/
/*           <button id="btnGroupDrop1" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" type="button">*/
/*             {% trans %}More{% endtrans %}*/
/*             <span class="caret-right"></span>*/
/*           </button>*/
/*           <ul class="dropdown-menu dropright" aria-labelledby="btnGroupDrop1">*/
/*             <li {% if (job.status == 'RUNNING') or (job.status == 'QUEUED') %}class="disabled"{% endif %}><a href="#" eb-action="runJob" eb-path="{{ path('runJob', {idJob: job.id, idClient: client.id}) }}" eb-jobid="{{job.id}}">{% trans %}Run now{% endtrans %}</a></li>*/
/*             <li {% if (job.status != 'RUNNING') and (job.status != 'QUEUED') %}class="disabled"{% endif %}><a href="#" eb-action="abortJob" eb-path="{{ path('abortJob', {idJob: job.id, idClient: client.id}) }}" eb-jobid="{{job.id}}" eb-message="{{ 'Job <strong>%name%</strong> is running. Do you really want to abort it ?' | trans({'%name%': job.name}) | raw }}" class="danger">{% trans %}Abort{% endtrans %}</a></li>*/
/*             <li role="separator" class="divider"></li>*/
/*             <li><a href="#" eb-action="deleteJob" eb-path="{{ path('deleteJob', {idClient: client.id, idJob:job.id}) }}" eb-jobid="{{job.id}}" eb-clientid="{{client.id}}" eb-message="{{ 'Really delete job <strong>%name%</strong>?<br><br>This will remove all related backups' | trans({'%name%': job.name}) | raw }}" class="danger">{% trans %}Delete{% endtrans %}</a></li>*/
/*           </ul>*/
/*         </div>*/
/*     </div>*/
/* */
/*   </td>*/
/* </tr>*/
/* */
/*   {% endfor %}*/
/* {% endfor %}*/
/* </table>*/
/* */
/* */
/* <div class="pull-right" style="padding-bottom: 10px;">*/
/*   <div class="btn-group" role="group" aria-label="...">*/
/*     <button class="btn btn-default" action="#" eb-action="addClient" eb-path="{{ path('editClient', {id: 'new'}) }}">*/
/*       <span class="glyphicon glyphicon-plus"></span> {% trans %}Add client{% endtrans %}*/
/*     </button>*/
/*   <button class="btn btn-default" action="#" eb-action="sortJobs" eb-path="{{ path('sortJobs') }}">{% trans %}Sort jobs{% endtrans %}</button>*/
/* */
/*   <div class="btn-group dropup" role="group">*/
/*     <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">*/
/*       {% trans %}Actions{% endtrans %}*/
/*       <span class="caret"></span>*/
/*     </button>*/
/*     <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">*/
/*       <li><a href="#" eb-action="runSelected">{% trans %}Run now{% endtrans %}</a></li>*/
/*       <li role="separator" class="divider"></li>*/
/*       <li><a href="#" eb-action="deleteSelected">{% trans %}Delete{% endtrans %}</a></li>*/
/*     </ul>*/
/*   </div>*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="navigation binovo-pagination">*/
/*     {{ knp_pagination_render(pagination)|raw }}*/
/* </div>*/
/* </div>*/
/* </div>*/
/* */
/* <div id="footer"></div>*/
/* */
/* */
/* <!--*/
/* MODALS*/
/* -->*/
/* <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModal">*/
/*   <div class="modal-dialog" role="document">*/
/*     <div class="modal-content panel-danger">*/
/*       <div class="modal-header panel-heading">*/
/*         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*         <h4 class="modal-title" id="exampleModalLabel">Danger zone!</h4>*/
/*       </div>*/
/*       <div class="modal-body">*/
/*         <span class="modal-message">message</span>*/
/*       </div>*/
/*       <div class="modal-footer">*/
/*         <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>*/
/*         <button type="button" class="btn btn-danger" action="#" eb-action="" eb-path="" eb-jobid="" eb-clientid="" eb-action-confirmed="">Delete</button>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="modal fade" id="abortModal" tabindex="-1" role="dialog" aria-labelledby="abortModal">*/
/*   <div class="modal-dialog" role="document">*/
/*     <div class="modal-content panel-danger">*/
/*       <div class="modal-header panel-heading">*/
/*         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*         <h4 class="modal-title" id="exampleModalLabel">Danger zone!</h4>*/
/*       </div>*/
/*       <div class="modal-body">*/
/*         <span class="modal-message">message</span>*/
/*       </div>*/
/*       <div class="modal-footer">*/
/*         <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>*/
/*         <button type="button" class="btn btn-danger" action="#" eb-action="" eb-path="" eb-jobid="" eb-clientid="" eb-action-confirmed="">Abort job</button>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
