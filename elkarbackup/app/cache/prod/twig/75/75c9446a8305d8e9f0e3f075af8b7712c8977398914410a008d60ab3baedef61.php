<?php

/* BinovoElkarBackupBundle:Default:client.html.twig */
class __TwigTemplate_cd9309aab1f6041f3675e5a158b48f78ceb6cfc9547ebf5741a2698e1511bc03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("BinovoElkarBackupBundle:Default:base.html.twig", "BinovoElkarBackupBundle:Default:client.html.twig", 5);
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
            // asset "4acda04_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4acda04_0") : $this->env->getExtension('asset')->getAssetUrl("js/4acda04_edit-client_1.js");
            // line 11
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "4acda04"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4acda04") : $this->env->getExtension('asset')->getAssetUrl("js/4acda04.js");
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
<div class=\"top-action-buttons pull-right\">
  <div data-dojo-type=\"dijit/Tooltip\" data-dojo-props=\"connectId: 'btnAddJobDisabled'\">
          ";
        // line 19
        echo $this->env->getExtension('translator')->getTranslator()->trans("Client has not yet been saved", array(), "BinovoElkarBackup");
        // line 20
        echo "  </div>
  <div class=\"btn-group inline\" ";
        // line 21
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array()), "id", array())) {
            echo "id=\"btnAddJobDisabled\"";
        }
        echo ">
    <button type=\"button\" class=\"btn btn-default btn-pull-right\" ";
        // line 22
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array()), "id", array())) {
            echo "disabled=\"true\"";
        }
        echo " onclick=\"document.location.href='";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editJob", array("idJob" => "new", "idClient" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array()), "id", array()))), "html", null, true);
        echo "'\"> <span class=\"glyphicon glyphicon-plus\"></span> ";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Add job", array(), "BinovoElkarBackup");
        echo "</button>
  </div>
</div>

<form class=\"form-horizontal\" action=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("saveClient", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array()), "id", array()))), "html", null, true);
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo ">
    <h3 id=\"legend\">";
        // line 27
        echo $this->env->getExtension('translator')->getTranslator()->trans("Edit client", array(), "BinovoElkarBackup");
        echo "</h3>
    <div class=\"row\">
        <div class=\"col-md-6\">
";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "client"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 31
            echo "            <div class=\"controls help-block\">
                ";
            // line 32
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "BinovoElkarBackupBundle:Default:fields.html.twig"));
        // line 36
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'row');
        echo "
            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "url", array()), 'row');
        echo "
            ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "quota", array()), 'row');
        echo "
            <div class=\"form-group\">
                <label class=\"control-label col-xs-12 col-md-3\">";
        // line 40
        echo $this->env->getExtension('translator')->getTranslator()->trans("Disk usage", array(), "BinovoElkarBackup");
        echo "</label>
                <div class=\"col-xs-12 col-md-9\"><input style=\"";
        // line 41
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array()), "quota", array()) > 0) && (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array()), "diskUsage", array()) / $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array()), "quota", array())) > (isset($context["warning_load_level"]) ? $context["warning_load_level"] : null)))) {
            echo "color:red";
        }
        echo "\" type=\"text\" class=\"col-md-12\" disabled=\"disabled\" value=\"";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array()), "diskUsage", array()) / 1024), 0), "html", null, true);
        echo " MB";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array()), "quota", array()) > 0)) {
            echo " (";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array()), "diskUsage", array()) / $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array()), "quota", array())) * 100), 0), "html", null, true);
            echo "%)";
        }
        echo "\" /></div>
            </div>
            ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "description", array()), 'row');
        echo "
            ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "isActive", array()), 'row');
        echo "
            ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "preScripts", array()), 'row');
        echo "
            ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "postScripts", array()), 'row');
        echo "
            ";
        // line 47
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 48
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "owner", array()), 'row');
            echo "
            ";
        }
        // line 50
        echo "
            <div class=\"panel panel-default\">
              <div class=\"panel-heading panel-collapsable-heading\">
                <a class=\"collapsed\" href=\"#viewadvanced\" data-toggle=\"collapse\" data-target=\"#viewadvanced\">Advanced</a></div>
              <div id=\"viewadvanced\" class=\"collapse panel-body\">
                ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "sshArgs", array()), 'row');
        echo "
                ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "rsyncShortArgs", array()), 'row');
        echo "
                ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "rsyncLongArgs", array()), 'row');
        echo "
              </div>
            </div>

            <div class=\"control-group\">
              <div class=\"controls control-row\">
                  <button type=\"submit\" class=\"btn btn-default pull-right\">";
        // line 63
        echo $this->env->getExtension('translator')->getTranslator()->trans("Save", array(), "BinovoElkarBackup");
        echo "</button>
              </div>
            </div>
        </div>
        <div class=\"col-md-6\">
            ";
        // line 68
        echo $this->env->getExtension('translator')->getTranslator()->trans("client_help", array(), "BinovoElkarBackup");
        // line 69
        echo "        </div>
    </div>
    <div>
        <div>
            ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", array()), 'widget');
        echo "
        </div>
    </div>
</form>


";
    }

    public function getTemplateName()
    {
        return "BinovoElkarBackupBundle:Default:client.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 73,  210 => 69,  208 => 68,  200 => 63,  191 => 57,  187 => 56,  183 => 55,  176 => 50,  170 => 48,  168 => 47,  164 => 46,  160 => 45,  156 => 44,  152 => 43,  137 => 41,  133 => 40,  128 => 38,  124 => 37,  119 => 36,  117 => 35,  108 => 32,  105 => 31,  101 => 30,  95 => 27,  89 => 26,  76 => 22,  70 => 21,  67 => 20,  65 => 19,  60 => 16,  57 => 15,  41 => 11,  37 => 10,  32 => 9,  29 => 8,  11 => 5,);
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
/*     {% javascripts '@BinovoElkarBackupBundle/Resources/public/js/edit-client.js' %}*/
/*         <script type="text/javascript" src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* <div class="top-action-buttons pull-right">*/
/*   <div data-dojo-type="dijit/Tooltip" data-dojo-props="connectId: 'btnAddJobDisabled'">*/
/*           {% trans %}Client has not yet been saved{% endtrans %}*/
/*   </div>*/
/*   <div class="btn-group inline" {% if not form.vars.value.id %}id="btnAddJobDisabled"{% endif %}>*/
/*     <button type="button" class="btn btn-default btn-pull-right" {% if not form.vars.value.id %}disabled="true"{% endif %} onclick="document.location.href='{{ path('editJob', {idJob: 'new', idClient: form.vars.value.id}) }}'"> <span class="glyphicon glyphicon-plus"></span> {% trans %}Add job{% endtrans %}</button>*/
/*   </div>*/
/* </div>*/
/* */
/* <form class="form-horizontal" action="{{ path('saveClient', {id: form.vars.value.id}) }}" method="POST" {{ form_enctype(form) }}>*/
/*     <h3 id="legend">{% trans %}Edit client{% endtrans %}</h3>*/
/*     <div class="row">*/
/*         <div class="col-md-6">*/
/* {% for flashMessage in app.session.flashbag.get('client') %}*/
/*             <div class="controls help-block">*/
/*                 {{ flashMessage }}*/
/*             </div>*/
/* {% endfor %}*/
/* {% form_theme form 'BinovoElkarBackupBundle:Default:fields.html.twig' %}*/
/*             {{ form_row(form.name) }}*/
/*             {{ form_row(form.url) }}*/
/*             {{ form_row(form.quota) }}*/
/*             <div class="form-group">*/
/*                 <label class="control-label col-xs-12 col-md-3">{% trans %}Disk usage{% endtrans %}</label>*/
/*                 <div class="col-xs-12 col-md-9"><input style="{% if form.vars.value.quota > 0 and form.vars.value.diskUsage / form.vars.value.quota > warning_load_level %}color:red{% endif %}" type="text" class="col-md-12" disabled="disabled" value="{{ (form.vars.value.diskUsage / 1024) | number_format(0)  }} MB{% if form.vars.value.quota > 0 %} ({{ (form.vars.value.diskUsage / form.vars.value.quota * 100) | number_format(0)}}%){% endif %}" /></div>*/
/*             </div>*/
/*             {{ form_row(form.description) }}*/
/*             {{ form_row(form.isActive) }}*/
/*             {{ form_row(form.preScripts) }}*/
/*             {{ form_row(form.postScripts) }}*/
/*             {% if is_granted('ROLE_ADMIN') %}*/
/*                 {{ form_row(form.owner) }}*/
/*             {% endif %}*/
/* */
/*             <div class="panel panel-default">*/
/*               <div class="panel-heading panel-collapsable-heading">*/
/*                 <a class="collapsed" href="#viewadvanced" data-toggle="collapse" data-target="#viewadvanced">Advanced</a></div>*/
/*               <div id="viewadvanced" class="collapse panel-body">*/
/*                 {{ form_row(form.sshArgs) }}*/
/*                 {{ form_row(form.rsyncShortArgs)}}*/
/*                 {{ form_row(form.rsyncLongArgs)}}*/
/*               </div>*/
/*             </div>*/
/* */
/*             <div class="control-group">*/
/*               <div class="controls control-row">*/
/*                   <button type="submit" class="btn btn-default pull-right">{% trans %}Save{% endtrans %}</button>*/
/*               </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-md-6">*/
/*             {% trans %}client_help{% endtrans %}*/
/*         </div>*/
/*     </div>*/
/*     <div>*/
/*         <div>*/
/*             {{ form_widget(form._token) }}*/
/*         </div>*/
/*     </div>*/
/* </form>*/
/* */
/* */
/* {% endblock %}*/
/* */
