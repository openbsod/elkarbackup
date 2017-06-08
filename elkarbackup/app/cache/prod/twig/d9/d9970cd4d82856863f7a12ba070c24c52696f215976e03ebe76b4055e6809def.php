<?php

/* BinovoElkarBackupBundle:Default:script.html.twig */
class __TwigTemplate_d6e592be766bbe1cd79b51ea0eaa3f730b571905b1a77db866c531301eca0f1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("BinovoElkarBackupBundle:Default:base.html.twig", "BinovoElkarBackupBundle:Default:script.html.twig", 5);
        $this->blocks = array(
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
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "
<div class=\"top-action-buttons pull-right\">
  <div data-dojo-type=\"dijit/Tooltip\" data-dojo-props=\"connectId: 'btnDownloadScriptDisabled'\">
          ";
        // line 12
        echo $this->env->getExtension('translator')->getTranslator()->trans("Script has not yet been saved", array(), "BinovoElkarBackup");
        // line 13
        echo "  </div>
  <div class=\"btn-group inline\" ";
        // line 14
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array()), "id", array())) {
            echo "id=\"btnDownloadScriptDisabled\"";
        }
        echo ">
    <button class=\"btn btn-default\" ";
        // line 15
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array()), "id", array())) {
            echo "disabled=\"true\"";
        }
        echo " onclick=\"window.location.href='";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("downloadScript", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array()), "id", array()))), "html", null, true);
        echo "'\"><span class=\"glyphicon glyphicon-download-alt\"></span> ";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Download", array(), "BinovoElkarBackup");
        echo "</button>
  </div>
</div>
<form class=\"form-horizontal\" action=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("saveScript", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array()), "id", array()))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo ">
    <h3 id=\"legend\">";
        // line 19
        echo $this->env->getExtension('translator')->getTranslator()->trans("Edit script", array(), "BinovoElkarBackup");
        echo "</h3>
    <div class=\"row\">
        <div class=\"col-md-6\">
";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "editScript"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 23
            echo "            <div class=\"controls help-block\">
                ";
            // line 24
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "            ";
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "BinovoElkarBackupBundle:Default:fields.html.twig"));
        // line 28
        echo "            <div class=\"controls\">
            </div>

       <div class=\"form-group\">
          <label class=\"required control-label col-xs-12 col-md-3\">";
        // line 32
        echo $this->env->getExtension('translator')->getTranslator()->trans("Name", array(), "BinovoElkarBackup");
        echo "</label>
          <div class=\"col-xs-12 col-md-9\"> ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'widget');
        echo "</div>
       </div>
       <div class=\"form-group\">
          <label class=\"control-label col-xs-12 col-md-3\">";
        // line 36
        echo $this->env->getExtension('translator')->getTranslator()->trans("Description", array(), "BinovoElkarBackup");
        echo "</label>
          <div class=\"col-xs-12 col-md-9\"> ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "description", array()), 'widget');
        echo "</div>
       </div>
       <div class=\"form-group\">
          <label class=\"required control-label col-xs-12 col-md-3\">";
        // line 40
        echo $this->env->getExtension('translator')->getTranslator()->trans("File", array(), "BinovoElkarBackup");
        echo "</label>
          <div class=\"col-xs-12 col-md-9\"> ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "scriptFile", array()), 'widget');
        echo "</div>
       </div>

      <div class=\"form-group\">
  \t\t    <label class=\"control-label col-xs-12 col-md-3\">";
        // line 45
        echo $this->env->getExtension('translator')->getTranslator()->trans("Run as", array(), "BinovoElkarBackup");
        echo "</label>
          <div class=\"col-xs-12 col-md-9\">
            <table class=\"table table-condensed text-center\">
              <tr>
                <th></th>
                <th class=\"text-center\">";
        // line 50
        echo $this->env->getExtension('translator')->getTranslator()->trans("Before", array(), "BinovoElkarBackup");
        echo "</th>
                <th class=\"text-center\">";
        // line 51
        echo $this->env->getExtension('translator')->getTranslator()->trans("After", array(), "BinovoElkarBackup");
        echo "</th>
              </tr>
              <tr>
               <th>";
        // line 54
        echo $this->env->getExtension('translator')->getTranslator()->trans("Client", array(), "BinovoElkarBackup");
        echo "</th>
               <td>";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "isClientPre", array()), 'widget');
        echo "</td>
               <td>";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "isClientPost", array()), 'widget');
        echo "</td>
             </tr>
              <tr>
               <th>";
        // line 59
        echo $this->env->getExtension('translator')->getTranslator()->trans("Job", array(), "BinovoElkarBackup");
        echo "</th>
               <td>";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "isJobPre", array()), 'widget');
        echo "</td>
               <td>";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "isJobPost", array()), 'widget');
        echo "</td>
             </tr>
            </table>
          </div>
      </div>

\t     ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", array()), 'widget');
        echo "

            <div class=\"control-group\">
                <div class=\"controls\">
                    <input class=\"btn btn-default pull-right\" type=\"submit\" value=\"";
        // line 71
        echo $this->env->getExtension('translator')->getTranslator()->trans("Save", array(), "BinovoElkarBackup");
        echo "\"/>
                </div>
            </div>

            <div class=\"control-group col-md-12 col-xs-12\">
              <h3>";
        // line 76
        echo $this->env->getExtension('translator')->getTranslator()->trans("Used by", array(), "BinovoElkarBackup");
        echo "</h3>
                <div class=\"controls col-md-12 col-xs-12\">
";
        // line 78
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array()), "isUsed", array())) {
            // line 79
            echo "
<table class=\"table table-condensed text-center\">
              <tr>
                <th class=\"text-center\">";
            // line 82
            echo $this->env->getExtension('translator')->getTranslator()->trans("Client", array(), "BinovoElkarBackup");
            echo "</th>
                <th class=\"text-center\">";
            // line 83
            echo $this->env->getExtension('translator')->getTranslator()->trans("Job", array(), "BinovoElkarBackup");
            echo "</th>
                <th class=\"text-center\">";
            // line 84
            echo $this->env->getExtension('translator')->getTranslator()->trans("Run as", array(), "BinovoElkarBackup");
            echo "</th>
              </tr>





    ";
            // line 91
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array()), "postClients", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
                // line 92
                echo "                <tr>
\t\t <td><a href=\"";
                // line 93
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editClient", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "name", array()), "html", null, true);
                echo "</a></td>
\t\t <td> - </td>
\t\t <td>";
                // line 95
                echo $this->env->getExtension('translator')->getTranslator()->trans("After", array(), "BinovoElkarBackup");
                echo "</td>
\t\t</tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array()), "preClients", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
                // line 99
                echo "                <tr>
\t\t <td><a href=\"";
                // line 100
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editClient", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "name", array()), "html", null, true);
                echo "</a></td>
\t\t <td> - </td>
\t\t <td>";
                // line 102
                echo $this->env->getExtension('translator')->getTranslator()->trans("Before", array(), "BinovoElkarBackup");
                echo "</td>
\t\t</tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array()), "postJobs", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
                // line 106
                echo "                <tr>
\t\t <td>";
                // line 107
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["job"], "client", array()), "name", array()), "html", null, true);
                echo "</td>
\t\t <td><a href=\"";
                // line 108
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editJob", array("idClient" => $this->getAttribute($this->getAttribute($context["job"], "client", array()), "id", array()), "idJob" => $this->getAttribute($context["job"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "name", array()), "html", null, true);
                echo "</a> </td>
\t\t <td>";
                // line 109
                echo $this->env->getExtension('translator')->getTranslator()->trans("After", array(), "BinovoElkarBackup");
                echo "</td>
\t\t</tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array()), "preJobs", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
                // line 113
                echo "                <tr>
\t\t <td>";
                // line 114
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["job"], "client", array()), "name", array()), "html", null, true);
                echo "</td>
\t\t <td><a href=\"";
                // line 115
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editJob", array("idClient" => $this->getAttribute($this->getAttribute($context["job"], "client", array()), "id", array()), "idJob" => $this->getAttribute($context["job"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "name", array()), "html", null, true);
                echo "</a> </td>
\t\t <td>";
                // line 116
                echo $this->env->getExtension('translator')->getTranslator()->trans("Before", array(), "BinovoElkarBackup");
                echo "</td>
\t\t</tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 119
            echo "\t</table>
";
        } else {
            // line 121
            echo "    ";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Currently not used", array(), "BinovoElkarBackup");
        }
        // line 123
        echo "
                </div>
            </div>
        </div>
        <div class=\"col-md-6\">
            ";
        // line 128
        echo $this->env->getExtension('translator')->getTranslator()->trans("script_help", array(), "BinovoElkarBackup");
        // line 129
        echo "        </div>
    </div>
</form>

";
    }

    public function getTemplateName()
    {
        return "BinovoElkarBackupBundle:Default:script.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  339 => 129,  337 => 128,  330 => 123,  326 => 121,  322 => 119,  313 => 116,  307 => 115,  303 => 114,  300 => 113,  295 => 112,  286 => 109,  280 => 108,  276 => 107,  273 => 106,  268 => 105,  259 => 102,  252 => 100,  249 => 99,  244 => 98,  235 => 95,  228 => 93,  225 => 92,  221 => 91,  211 => 84,  207 => 83,  203 => 82,  198 => 79,  196 => 78,  191 => 76,  183 => 71,  176 => 67,  167 => 61,  163 => 60,  159 => 59,  153 => 56,  149 => 55,  145 => 54,  139 => 51,  135 => 50,  127 => 45,  120 => 41,  116 => 40,  110 => 37,  106 => 36,  100 => 33,  96 => 32,  90 => 28,  87 => 27,  78 => 24,  75 => 23,  71 => 22,  65 => 19,  59 => 18,  47 => 15,  41 => 14,  38 => 13,  36 => 12,  31 => 9,  28 => 8,  11 => 5,);
    }
}
/* {##*/
/*  # @copyright 2012,2013 Binovo it Human Project, S.L.*/
/*  # @license http://www.opensource.org/licenses/bsd-license.php New-BSD*/
/*  #}*/
/* {% extends 'BinovoElkarBackupBundle:Default:base.html.twig' %}*/
/* {% trans_default_domain 'BinovoElkarBackup' %}*/
/* */
/* {% block body %}*/
/* */
/* <div class="top-action-buttons pull-right">*/
/*   <div data-dojo-type="dijit/Tooltip" data-dojo-props="connectId: 'btnDownloadScriptDisabled'">*/
/*           {% trans %}Script has not yet been saved{% endtrans %}*/
/*   </div>*/
/*   <div class="btn-group inline" {% if not form.vars.value.id %}id="btnDownloadScriptDisabled"{% endif %}>*/
/*     <button class="btn btn-default" {% if not form.vars.value.id %}disabled="true"{% endif %} onclick="window.location.href='{{path('downloadScript', {id: form.vars.value.id}) }}'"><span class="glyphicon glyphicon-download-alt"></span> {% trans %}Download{% endtrans %}</button>*/
/*   </div>*/
/* </div>*/
/* <form class="form-horizontal" action="{{ path('saveScript', {id: form.vars.value.id}) }}" method="post" {{ form_enctype(form) }}>*/
/*     <h3 id="legend">{% trans %}Edit script{% endtrans %}</h3>*/
/*     <div class="row">*/
/*         <div class="col-md-6">*/
/* {% for flashMessage in app.session.flashbag.get('editScript') %}*/
/*             <div class="controls help-block">*/
/*                 {{ flashMessage }}*/
/*             </div>*/
/* {% endfor %}*/
/*             {% form_theme form 'BinovoElkarBackupBundle:Default:fields.html.twig' %}*/
/*             <div class="controls">*/
/*             </div>*/
/* */
/*        <div class="form-group">*/
/*           <label class="required control-label col-xs-12 col-md-3">{% trans %}Name{% endtrans %}</label>*/
/*           <div class="col-xs-12 col-md-9"> {{ form_widget(form.name) }}</div>*/
/*        </div>*/
/*        <div class="form-group">*/
/*           <label class="control-label col-xs-12 col-md-3">{% trans %}Description{% endtrans %}</label>*/
/*           <div class="col-xs-12 col-md-9"> {{ form_widget(form.description) }}</div>*/
/*        </div>*/
/*        <div class="form-group">*/
/*           <label class="required control-label col-xs-12 col-md-3">{% trans %}File{% endtrans %}</label>*/
/*           <div class="col-xs-12 col-md-9"> {{ form_widget(form.scriptFile) }}</div>*/
/*        </div>*/
/* */
/*       <div class="form-group">*/
/*   		    <label class="control-label col-xs-12 col-md-3">{% trans %}Run as{% endtrans %}</label>*/
/*           <div class="col-xs-12 col-md-9">*/
/*             <table class="table table-condensed text-center">*/
/*               <tr>*/
/*                 <th></th>*/
/*                 <th class="text-center">{% trans %}Before{% endtrans %}</th>*/
/*                 <th class="text-center">{% trans %}After{% endtrans %}</th>*/
/*               </tr>*/
/*               <tr>*/
/*                <th>{% trans %}Client{% endtrans %}</th>*/
/*                <td>{{ form_widget(form.isClientPre) }}</td>*/
/*                <td>{{ form_widget(form.isClientPost) }}</td>*/
/*              </tr>*/
/*               <tr>*/
/*                <th>{% trans %}Job{% endtrans %}</th>*/
/*                <td>{{ form_widget(form.isJobPre) }}</td>*/
/*                <td>{{ form_widget(form.isJobPost) }}</td>*/
/*              </tr>*/
/*             </table>*/
/*           </div>*/
/*       </div>*/
/* */
/* 	     {{ form_widget(form._token) }}*/
/* */
/*             <div class="control-group">*/
/*                 <div class="controls">*/
/*                     <input class="btn btn-default pull-right" type="submit" value="{% trans %}Save{% endtrans %}"/>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="control-group col-md-12 col-xs-12">*/
/*               <h3>{% trans %}Used by{% endtrans %}</h3>*/
/*                 <div class="controls col-md-12 col-xs-12">*/
/* {% if form.vars.value.isUsed %}*/
/* */
/* <table class="table table-condensed text-center">*/
/*               <tr>*/
/*                 <th class="text-center">{% trans %}Client{% endtrans %}</th>*/
/*                 <th class="text-center">{% trans %}Job{% endtrans %}</th>*/
/*                 <th class="text-center">{% trans %}Run as{% endtrans %}</th>*/
/*               </tr>*/
/* */
/* */
/* */
/* */
/* */
/*     {% for client in form.vars.value.postClients %}*/
/*                 <tr>*/
/* 		 <td><a href="{{ path('editClient', {id: client.id}) }}">{{ client.name }}</a></td>*/
/* 		 <td> - </td>*/
/* 		 <td>{% trans %}After{% endtrans %}</td>*/
/* 		</tr>*/
/*     {% endfor %}*/
/*     {% for client in form.vars.value.preClients %}*/
/*                 <tr>*/
/* 		 <td><a href="{{ path('editClient', {id: client.id}) }}">{{ client.name }}</a></td>*/
/* 		 <td> - </td>*/
/* 		 <td>{% trans %}Before{% endtrans %}</td>*/
/* 		</tr>*/
/*     {% endfor %}*/
/*     {% for job in form.vars.value.postJobs %}*/
/*                 <tr>*/
/* 		 <td>{{ job.client.name }}</td>*/
/* 		 <td><a href="{{ path('editJob', {idClient: job.client.id, idJob: job.id}) }}">{{ job.name}}</a> </td>*/
/* 		 <td>{% trans %}After{% endtrans %}</td>*/
/* 		</tr>*/
/*     {% endfor %}*/
/*     {% for job in form.vars.value.preJobs %}*/
/*                 <tr>*/
/* 		 <td>{{ job.client.name }}</td>*/
/* 		 <td><a href="{{ path('editJob', {idClient: job.client.id, idJob: job.id}) }}">{{ job.name}}</a> </td>*/
/* 		 <td>{% trans %}Before{% endtrans %}</td>*/
/* 		</tr>*/
/*     {% endfor %}*/
/* 	</table>*/
/* {% else %}*/
/*     {% trans %}Currently not used{% endtrans %}*/
/* {% endif %}*/
/* */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-md-6">*/
/*             {% trans %}script_help{% endtrans %}*/
/*         </div>*/
/*     </div>*/
/* </form>*/
/* */
/* {% endblock %}*/
/* */
