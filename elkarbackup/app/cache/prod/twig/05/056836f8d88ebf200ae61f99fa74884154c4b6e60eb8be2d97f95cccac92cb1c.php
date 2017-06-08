<?php

/* BinovoElkarBackupBundle:Default:job.html.twig */
class __TwigTemplate_ce507cb310e5c2664ea9749342536fc5685346b4b1507715613430029f7208b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("BinovoElkarBackupBundle:Default:base.html.twig", "BinovoElkarBackupBundle:Default:job.html.twig", 5);
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
            // asset "28b0684_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_28b0684_0") : $this->env->getExtension('asset')->getAssetUrl("js/28b0684_edit-job_1.js");
            // line 11
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "28b0684"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_28b0684") : $this->env->getExtension('asset')->getAssetUrl("js/28b0684.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        // line 17
        echo "

";
        // line 19
        $context["hasBackups"] = false;
        // line 20
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array()), "id", array())) {
            // line 21
            echo "  ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array()), "hasBackups", array())) {
                // line 22
                echo "    ";
                $context["hasBackups"] = true;
                // line 23
                echo "  ";
            }
        }
        // line 25
        echo "
<div class=\"top-action-buttons pull-right\">
  <div data-dojo-type=\"dijit/Tooltip\" data-dojo-props=\"connectId: 'btnRunNowDisabled'\">
          ";
        // line 28
        echo $this->env->getExtension('translator')->getTranslator()->trans("Job has not yet been saved", array(), "BinovoElkarBackup");
        // line 29
        echo "  </div>
  <div class=\"btn-group inline\" ";
        // line 30
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array()), "id", array())) {
            echo "id=\"btnRunNowDisabled\"";
        }
        echo ">
    <button class=\"btn btn-default btn-pull-right\" type=\"button\" id=\"runNow\"><span class=\"glyphicon glyphicon-repeat\"></span> ";
        // line 31
        echo $this->env->getExtension('translator')->getTranslator()->trans("Run now", array(), "BinovoElkarBackup");
        echo "</button>
  </div>
  <div data-dojo-type=\"dijit/Tooltip\" data-dojo-props=\"connectId: 'btnRestoreDisabled'\">
          ";
        // line 34
        echo $this->env->getExtension('translator')->getTranslator()->trans("Backup not found", array(), "BinovoElkarBackup");
        // line 35
        echo "  </div>
  <div class=\"btn-group inline\" ";
        // line 36
        if (((isset($context["hasBackups"]) ? $context["hasBackups"] : null) == false)) {
            echo "id=\"btnRestoreDisabled\"";
        }
        echo ">
    <button type=\"button\" class=\"btn btn-default btn-pull-right\" ";
        // line 37
        if (((isset($context["hasBackups"]) ? $context["hasBackups"] : null) == false)) {
            echo "disabled=\"true\" ";
        }
        echo " onclick=\"document.location.href='";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("showJobBackup", array("idClient" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array()), "client", array()), "id", array()), "idJob" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array()), "id", array()), "action" => "view")), "html", null, true);
        echo "'\"><span class=\"glyphicon glyphicon-cloud-download\"></span> ";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Backups", array(), "BinovoElkarBackup");
        echo "</button>
  </div>
</div>

<form class=\"form-horizontal\" action=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("saveJob", array("idJob" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array()), "id", array()), "idClient" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array()), "client", array()), "id", array()))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo ">

    <h3 id=\"legend\">";
        // line 43
        echo $this->env->getExtension('translator')->getTranslator()->trans("Edit Job", array(), "BinovoElkarBackup");
        echo "</h3>
    <div class=\"row\">
        <div class=\"col-md-6\">
";
        // line 46
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "BinovoElkarBackupBundle:Default:fields.html.twig"));
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "job"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 48
            echo "            <div class=\"controls help-block alert alert-success\" class=\"alert alert-success\">
                ";
            // line 49
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "            <div>
                <div class=\"controls\">
                </div>
                ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'row');
        echo "
                ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "path", array()), 'row');
        echo "
                <div class=\"form-group\">
                    <label class=\"control-label col-xs-12 col-md-3\">";
        // line 58
        echo $this->env->getExtension('translator')->getTranslator()->trans("Disk usage", array(), "BinovoElkarBackup");
        echo "</label>
                    <div class=\"col-xs-12 col-md-9\"><input type=\"text\" disabled=\"disabled\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array()), "diskUsage", array()) / 1024), 0), "html", null, true);
        echo " MB\" /></div>
                </div>
                ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "description", array()), 'row');
        echo "
                ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "isActive", array()), 'row');
        echo "
                ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "notificationsTo", array()), 'row');
        echo "
                ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "notificationsEmail", array()), 'row', array("attr" => array("class" => "col-md-12")));
        echo "
                ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "minNotificationLevel", array()), 'row');
        echo "
                ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "preScripts", array()), 'row');
        echo "
                ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "postScripts", array()), 'row');
        echo "
                ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "policy", array()), 'row');
        echo "
                ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "useLocalPermissions", array()), 'row');
        echo "
                ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "exclude", array()), 'row');
        echo "
                ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "include", array()), 'row');
        echo "
                <div class=\"panel panel-default\">
                  <div class=\"panel-heading panel-collapsable-heading\">
                    <a class=\"collapsed\" href=\"#viewadvanced\" data-toggle=\"collapse\" data-target=\"#viewadvanced\">Advanced</a></div>
                  <div id=\"viewadvanced\" class=\"collapse panel-body\">
                    <div class=\"input-group\">
                    ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "token", array()), 'row');
        echo "
                    <span class=\"input-group-btn input-append\">

                          <a class=\"btn btn-default\" id=\"generateToken\" href=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("generateToken", array("idJob" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array()), "id", array()))), "html", null, true);
        echo "\" eb-action=\"generateToken\" eb-path=\"";
        echo $this->env->getExtension('routing')->getPath("generateToken");
        echo "\" eb-jobid=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array()), "id", array()), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-repeat\"></span> ";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Generate", array(), "BinovoElkarBackup");
        echo "</a>
                    </span>
                    <span class=\"input-group-btn input-append\">

                          <a class=\"btn btn-default\" id=\"removeToken\" href=\"#\" ><span class=\"glyphicon glyphicon-trash\"></span></a>
                    </span>
                    </div>
                  </div>
                </div>
                ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
            </div>
            <div class=\"control-group\">
                <div class=\"controls\">
                    <input class=\"btn btn-default pull-right\" type=\"submit\" value=\"";
        // line 93
        echo $this->env->getExtension('translator')->getTranslator()->trans("Save", array(), "BinovoElkarBackup");
        echo "\" />
                </div>
            </div>
        </div>
        <div class=\"col-md-6\">
            ";
        // line 98
        echo $this->env->getExtension('translator')->getTranslator()->trans("job_help", array(), "BinovoElkarBackup");
        // line 99
        echo "        </div>
    </div>
</form>

<form id=\"runNowForm\" action=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("runJob", array("idJob" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array()), "id", array()), "idClient" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array()), "client", array()), "id", array()))), "html", null, true);
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo ">
</form>

";
    }

    public function getTemplateName()
    {
        return "BinovoElkarBackupBundle:Default:job.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 103,  268 => 99,  266 => 98,  258 => 93,  251 => 89,  233 => 80,  227 => 77,  218 => 71,  214 => 70,  210 => 69,  206 => 68,  202 => 67,  198 => 66,  194 => 65,  190 => 64,  186 => 63,  182 => 62,  178 => 61,  173 => 59,  169 => 58,  164 => 56,  160 => 55,  155 => 52,  146 => 49,  143 => 48,  139 => 47,  137 => 46,  131 => 43,  124 => 41,  111 => 37,  105 => 36,  102 => 35,  100 => 34,  94 => 31,  88 => 30,  85 => 29,  83 => 28,  78 => 25,  74 => 23,  71 => 22,  68 => 21,  66 => 20,  64 => 19,  60 => 17,  57 => 16,  41 => 11,  37 => 10,  32 => 9,  29 => 8,  11 => 5,);
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
/*     {% javascripts '@BinovoElkarBackupBundle/Resources/public/js/edit-job.js' %}*/
/*         <script type="text/javascript" src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/* {% endblock %}*/
/* */
/* */
/* {% block body %}*/
/* */
/* */
/* {% set hasBackups = false %}*/
/* {% if form.vars.value.id %}*/
/*   {% if form.vars.value.hasBackups %}*/
/*     {% set hasBackups = true %}*/
/*   {% endif %}*/
/* {% endif %}*/
/* */
/* <div class="top-action-buttons pull-right">*/
/*   <div data-dojo-type="dijit/Tooltip" data-dojo-props="connectId: 'btnRunNowDisabled'">*/
/*           {% trans %}Job has not yet been saved{% endtrans %}*/
/*   </div>*/
/*   <div class="btn-group inline" {% if not form.vars.value.id %}id="btnRunNowDisabled"{% endif %}>*/
/*     <button class="btn btn-default btn-pull-right" type="button" id="runNow"><span class="glyphicon glyphicon-repeat"></span> {% trans %}Run now{% endtrans %}</button>*/
/*   </div>*/
/*   <div data-dojo-type="dijit/Tooltip" data-dojo-props="connectId: 'btnRestoreDisabled'">*/
/*           {% trans %}Backup not found{% endtrans %}*/
/*   </div>*/
/*   <div class="btn-group inline" {% if hasBackups == false %}id="btnRestoreDisabled"{% endif %}>*/
/*     <button type="button" class="btn btn-default btn-pull-right" {% if hasBackups == false %}disabled="true" {% endif %} onclick="document.location.href='{{path('showJobBackup', {idClient: form.vars.value.client.id, idJob: form.vars.value.id, action: 'view'}) }}'"><span class="glyphicon glyphicon-cloud-download"></span> {% trans %}Backups{% endtrans %}</button>*/
/*   </div>*/
/* </div>*/
/* */
/* <form class="form-horizontal" action="{{ path('saveJob', {idJob: form.vars.value.id, idClient: form.vars.value.client.id}) }}" method="post" {{ form_enctype(form) }}>*/
/* */
/*     <h3 id="legend">{% trans %}Edit Job{% endtrans %}</h3>*/
/*     <div class="row">*/
/*         <div class="col-md-6">*/
/* {% form_theme form 'BinovoElkarBackupBundle:Default:fields.html.twig' %}*/
/* {% for flashMessage in app.session.flashbag.get('job') %}*/
/*             <div class="controls help-block alert alert-success" class="alert alert-success">*/
/*                 {{ flashMessage }}*/
/*             </div>*/
/* {% endfor %}*/
/*             <div>*/
/*                 <div class="controls">*/
/*                 </div>*/
/*                 {{ form_row(form.name) }}*/
/*                 {{ form_row(form.path) }}*/
/*                 <div class="form-group">*/
/*                     <label class="control-label col-xs-12 col-md-3">{% trans %}Disk usage{% endtrans %}</label>*/
/*                     <div class="col-xs-12 col-md-9"><input type="text" disabled="disabled" value="{{ (form.vars.value.diskUsage / 1024) | number_format(0)  }} MB" /></div>*/
/*                 </div>*/
/*                 {{ form_row(form.description) }}*/
/*                 {{ form_row(form.isActive) }}*/
/*                 {{ form_row(form.notificationsTo) }}*/
/*                 {{ form_row(form.notificationsEmail, {attr: {class: 'col-md-12'}}) }}*/
/*                 {{ form_row(form.minNotificationLevel) }}*/
/*                 {{ form_row(form.preScripts) }}*/
/*                 {{ form_row(form.postScripts) }}*/
/*                 {{ form_row(form.policy) }}*/
/*                 {{ form_row(form.useLocalPermissions) }}*/
/*                 {{ form_row(form.exclude) }}*/
/*                 {{ form_row(form.include) }}*/
/*                 <div class="panel panel-default">*/
/*                   <div class="panel-heading panel-collapsable-heading">*/
/*                     <a class="collapsed" href="#viewadvanced" data-toggle="collapse" data-target="#viewadvanced">Advanced</a></div>*/
/*                   <div id="viewadvanced" class="collapse panel-body">*/
/*                     <div class="input-group">*/
/*                     {{ form_row(form.token) }}*/
/*                     <span class="input-group-btn input-append">*/
/* */
/*                           <a class="btn btn-default" id="generateToken" href="{{ path('generateToken', {idJob: form.vars.value.id}) }}" eb-action="generateToken" eb-path="{{ path('generateToken') }}" eb-jobid="{{form.vars.value.id}}"><span class="glyphicon glyphicon-repeat"></span> {% trans %}Generate{% endtrans %}</a>*/
/*                     </span>*/
/*                     <span class="input-group-btn input-append">*/
/* */
/*                           <a class="btn btn-default" id="removeToken" href="#" ><span class="glyphicon glyphicon-trash"></span></a>*/
/*                     </span>*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*                 {{ form_rest(form) }}*/
/*             </div>*/
/*             <div class="control-group">*/
/*                 <div class="controls">*/
/*                     <input class="btn btn-default pull-right" type="submit" value="{% trans %}Save{% endtrans %}" />*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-md-6">*/
/*             {% trans %}job_help{% endtrans %}*/
/*         </div>*/
/*     </div>*/
/* </form>*/
/* */
/* <form id="runNowForm" action="{{ path('runJob', {idJob: form.vars.value.id, idClient: form.vars.value.client.id}) }}" method="POST" {{ form_enctype(form) }}>*/
/* </form>*/
/* */
/* {% endblock %}*/
/* */
