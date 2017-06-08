<?php

/* BinovoElkarBackupBundle:Default:scripts.html.twig */
class __TwigTemplate_5f91717846c6f51c30b4d7d04a1dbf2bb449280c512dc88c39b08fefc3558680 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("BinovoElkarBackupBundle:Default:base.html.twig", "BinovoElkarBackupBundle:Default:scripts.html.twig", 5);
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
            // asset "dc67ef4_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_dc67ef4_0") : $this->env->getExtension('asset')->getAssetUrl("js/dc67ef4_show-scripts_1.js");
            // line 11
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "dc67ef4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_dc67ef4") : $this->env->getExtension('asset')->getAssetUrl("js/dc67ef4.js");
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
<div class=\"max10\" >
<h3>";
        // line 19
        echo $this->env->getExtension('translator')->getTranslator()->trans("Scripts", array(), "BinovoElkarBackup");
        echo "</h3>

";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "showScripts"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 22
            echo "            <div class=\"controls help-block\">
                ";
            // line 23
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "
<table class=\"table table-condensed table-bordered table-striped\">
    <tr>
        ";
        // line 30
        echo "        <th>";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Id", array(), "BinovoElkarBackup");
        echo "</th>
        <th>";
        // line 31
        echo $this->env->getExtension('translator')->getTranslator()->trans("Name", array(), "BinovoElkarBackup");
        echo "</th>
        <th>";
        // line 32
        echo $this->env->getExtension('translator')->getTranslator()->trans("Description", array(), "BinovoElkarBackup");
        echo "</th>
        ";
        // line 33
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 34
            echo "          <th>";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Actions", array(), "BinovoElkarBackup");
            echo "</th>
        ";
        }
        // line 36
        echo "
    </tr>

    ";
        // line 40
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 41
            echo "    <tr>
        <td onclick=\"document.location.href='";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editScript", array("id" => $this->getAttribute($context["script"], "id", array()))), "html", null, true);
            echo "'\" class=\"ids\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editScript", array("id" => $this->getAttribute($context["script"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["script"], "id", array()), "html", null, true);
            echo "</a></td>
        <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["script"], "name", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["script"], "description", array()), "html", null, true);
            echo "</td>
        ";
            // line 45
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 46
                echo "
        <td class=\"actions\" style=\"width:20%; text-align: center\">



          <form action=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editScript", array("id" => $this->getAttribute($context["script"], "id", array()))), "html", null, true);
                echo "\" style=\"display:inline\">
            <button class=\"btn btn-default\" type=\"submit\"><span class=\"glyphicon glyphicon-pencil\"></span> ";
                // line 52
                echo $this->env->getExtension('translator')->getTranslator()->trans("Edit", array(), "BinovoElkarBackup");
                echo " </button>
          </form>
          <form data-bnv-message=\"";
                // line 54
                echo $this->env->getExtension('translator')->getTranslator()->trans("Really delete script %name%?", array("%name%" => $this->getAttribute($context["script"], "scriptname", array())), "BinovoElkarBackup");
                echo "\" class=\"delete-script\" action=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("deleteScript", array("id" => $this->getAttribute($context["script"], "id", array()))), "html", null, true);
                echo "\" method=\"POST\" style=\"display:inline\">
            <div data-dojo-type=\"dijit/Tooltip\" data-dojo-props=\"connectId: 'btnDeleteScriptDisabled'\">
                    ";
                // line 56
                echo $this->env->getExtension('translator')->getTranslator()->trans("This script is used by some client or job", array(), "BinovoElkarBackup");
                // line 57
                echo "            </div>
            <div class=\"btn-group inline\" ";
                // line 58
                if ($this->getAttribute($context["script"], "isUsed", array())) {
                    echo "id=\"btnDeleteScriptDisabled\"";
                }
                echo ">
              <button class=\"btn btn-default btn-danger\" type=\"submit\" ";
                // line 59
                if ($this->getAttribute($context["script"], "isUsed", array())) {
                    echo " disabled=\"True\"";
                }
                echo "><span class=\"glyphicon glyphicon-trash\"></span> ";
                echo $this->env->getExtension('translator')->getTranslator()->trans("Delete", array(), "BinovoElkarBackup");
                echo " </button>
            </div>
          </form>
        </td>
        ";
            }
            // line 64
            echo "
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "</table>
";
        // line 68
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 69
            echo "
<button class=\"btn btn-default pull-right\" type=\"button\" onclick=\"document.location.href='";
            // line 70
            echo $this->env->getExtension('routing')->getPath("editScript", array("id" => "new"));
            echo "'\"><span class=\"glyphicon glyphicon-plus\"></span>  ";
            echo $this->env->getExtension('translator')->getTranslator()->trans("New", array(), "BinovoElkarBackup");
            echo "</button>

";
        }
        // line 73
        echo "
";
        // line 75
        echo "<div class=\"navigation binovo-pagination\">
    ";
        // line 76
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : null));
        echo "
</div>
</div>
</div>


";
    }

    public function getTemplateName()
    {
        return "BinovoElkarBackupBundle:Default:scripts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 76,  216 => 75,  213 => 73,  205 => 70,  202 => 69,  200 => 68,  197 => 67,  189 => 64,  177 => 59,  171 => 58,  168 => 57,  166 => 56,  159 => 54,  154 => 52,  150 => 51,  143 => 46,  141 => 45,  137 => 44,  133 => 43,  125 => 42,  122 => 41,  117 => 40,  112 => 36,  106 => 34,  104 => 33,  100 => 32,  96 => 31,  91 => 30,  86 => 26,  77 => 23,  74 => 22,  70 => 21,  65 => 19,  60 => 16,  57 => 15,  41 => 11,  37 => 10,  32 => 9,  29 => 8,  11 => 5,);
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
/*     {% javascripts '@BinovoElkarBackupBundle/Resources/public/js/show-scripts.js' %}*/
/*         <script type="text/javascript" src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* <div class="row">*/
/* <div class="max10" >*/
/* <h3>{% trans %}Scripts{% endtrans %}</h3>*/
/* */
/* {% for flashMessage in app.session.flashbag.get('showScripts') %}*/
/*             <div class="controls help-block">*/
/*                 {{ flashMessage }}*/
/*             </div>*/
/* {% endfor %}*/
/* */
/* <table class="table table-condensed table-bordered table-striped">*/
/*     <tr>*/
/*         {# sorting of properties based on query components #}*/
/*         <th>{% trans %}Id{% endtrans %}</th>*/
/*         <th>{% trans %}Name{% endtrans %}</th>*/
/*         <th>{% trans %}Description{% endtrans %}</th>*/
/*         {% if is_granted('ROLE_ADMIN') %}*/
/*           <th>{% trans %}Actions{% endtrans %}</th>*/
/*         {% endif %}*/
/* */
/*     </tr>*/
/* */
/*     {# table body #}*/
/*     {% for script in pagination %}*/
/*     <tr>*/
/*         <td onclick="document.location.href='{{ path('editScript', {id: script.id}) }}'" class="ids"><a href="{{ path('editScript', {id: script.id}) }}">{{ script.id }}</a></td>*/
/*         <td>{{ script.name }}</td>*/
/*         <td>{{ script.description }}</td>*/
/*         {% if is_granted('ROLE_ADMIN') %}*/
/* */
/*         <td class="actions" style="width:20%; text-align: center">*/
/* */
/* */
/* */
/*           <form action="{{ path('editScript', {id: script.id}) }}" style="display:inline">*/
/*             <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-pencil"></span> {% trans %}Edit{% endtrans %} </button>*/
/*           </form>*/
/*           <form data-bnv-message="{% trans with {'%name%': script.scriptname} %}Really delete script %name%?{% endtrans %}" class="delete-script" action="{{ path('deleteScript', {id: script.id}) }}" method="POST" style="display:inline">*/
/*             <div data-dojo-type="dijit/Tooltip" data-dojo-props="connectId: 'btnDeleteScriptDisabled'">*/
/*                     {% trans %}This script is used by some client or job{% endtrans %}*/
/*             </div>*/
/*             <div class="btn-group inline" {% if script.isUsed %}id="btnDeleteScriptDisabled"{% endif %}>*/
/*               <button class="btn btn-default btn-danger" type="submit" {% if script.isUsed %} disabled="True"{% endif %}><span class="glyphicon glyphicon-trash"></span> {% trans %}Delete{% endtrans %} </button>*/
/*             </div>*/
/*           </form>*/
/*         </td>*/
/*         {% endif %}*/
/* */
/*     </tr>*/
/*     {% endfor %}*/
/* </table>*/
/* {% if is_granted('ROLE_ADMIN') %}*/
/* */
/* <button class="btn btn-default pull-right" type="button" onclick="document.location.href='{{ path('editScript', {id: 'new'}) }}'"><span class="glyphicon glyphicon-plus"></span>  {% trans %}New{% endtrans %}</button>*/
/* */
/* {% endif %}*/
/* */
/* {# display navigation #}*/
/* <div class="navigation binovo-pagination">*/
/*     {{ knp_pagination_render(pagination)|raw }}*/
/* </div>*/
/* </div>*/
/* </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
