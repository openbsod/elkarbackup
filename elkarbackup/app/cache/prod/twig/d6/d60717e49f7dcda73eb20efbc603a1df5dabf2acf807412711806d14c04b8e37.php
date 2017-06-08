<?php

/* BinovoElkarBackupBundle:Default:policies.html.twig */
class __TwigTemplate_a96e970bcfa03127f2fc5e69a1ff27e5259ed10a389a7f76d920edf6212956ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("BinovoElkarBackupBundle:Default:base.html.twig", "BinovoElkarBackupBundle:Default:policies.html.twig", 5);
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
            // asset "50d2dad_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_50d2dad_0") : $this->env->getExtension('asset')->getAssetUrl("js/50d2dad_show-policies_1.js");
            // line 11
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "50d2dad"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_50d2dad") : $this->env->getExtension('asset')->getAssetUrl("js/50d2dad.js");
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
<div class=\"col-md-8 col-md-offset-2 text-centered\">
<h3>";
        // line 19
        echo $this->env->getExtension('translator')->getTranslator()->trans("Policies", array(), "BinovoElkarBackup");
        echo "</h3>

";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "showPolicies"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 22
            echo "            <div class=\"control help-block alert alert-danger\">
                <p>";
            // line 23
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</p>
            </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "<table id=\"policies\" class=\"table table-condensed table-bordered table-striped\">
    <tr>
        ";
        // line 29
        echo "        <th class=\"ids\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Id", array(), "BinovoElkarBackup");
        echo "</th>
        <th>";
        // line 30
        echo $this->env->getExtension('translator')->getTranslator()->trans("Name", array(), "BinovoElkarBackup");
        echo "</th>
        ";
        // line 31
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 32
            echo "        <th>";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Actions", array(), "BinovoElkarBackup");
            echo "</th>
        ";
        }
        // line 34
        echo "
    </tr>

    ";
        // line 38
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["policy"]) {
            // line 39
            echo "    <tr>
        <td class=\"ids\"><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editPolicy", array("id" => $this->getAttribute($context["policy"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["policy"], "id", array()), "html", null, true);
            echo "</a></td>
        <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["policy"], "name", array()), "html", null, true);
            echo "</td>
        ";
            // line 42
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 43
                echo "        <td class=\"actions\">
              <form action=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editPolicy", array("id" => $this->getAttribute($context["policy"], "id", array()))), "html", null, true);
                echo "\" style=\"display:inline\">
                <button class=\"btn btn-default\" type=\"submit\"><span class=\"glyphicon glyphicon-pencil\"></span> ";
                // line 45
                echo $this->env->getExtension('translator')->getTranslator()->trans("Edit", array(), "BinovoElkarBackup");
                echo " </button>
              </form>
              <form data-bnv-message=\"";
                // line 47
                echo $this->env->getExtension('translator')->getTranslator()->trans("Really delete policy %name%?", array("%name%" => $this->getAttribute($context["policy"], "name", array())), "BinovoElkarBackup");
                echo "\" class=\"delete-policy\" action=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("deletePolicy", array("id" => $this->getAttribute($context["policy"], "id", array()))), "html", null, true);
                echo "\" method=\"POST\" style=\"display:inline\">
                <button class=\"btn btn-default btn-danger\" type=\"submit\"><span class=\"glyphicon glyphicon-trash\"></span> ";
                // line 48
                echo $this->env->getExtension('translator')->getTranslator()->trans("Delete", array(), "BinovoElkarBackup");
                echo " </button>
              </form>
        </td>
        ";
            }
            // line 52
            echo "
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['policy'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "</table>
";
        // line 56
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 57
            echo "<button class=\"btn btn-default pull-right\" type=\"button\" onclick=\"document.location.href='";
            echo $this->env->getExtension('routing')->getPath("editPolicy", array("id" => "new"));
            echo "'\"><span class=\"glyphicon glyphicon-plus\"></span> ";
            echo $this->env->getExtension('translator')->getTranslator()->trans("New", array(), "BinovoElkarBackup");
            echo "</button>
";
        }
        // line 59
        echo "
";
        // line 61
        echo "<div class=\"navigation binovo-pagination\">
    ";
        // line 62
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : null));
        echo "
</div>
</div>
</div>


";
    }

    public function getTemplateName()
    {
        return "BinovoElkarBackupBundle:Default:policies.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 62,  181 => 61,  178 => 59,  170 => 57,  168 => 56,  165 => 55,  157 => 52,  150 => 48,  144 => 47,  139 => 45,  135 => 44,  132 => 43,  130 => 42,  126 => 41,  120 => 40,  117 => 39,  112 => 38,  107 => 34,  101 => 32,  99 => 31,  95 => 30,  90 => 29,  86 => 26,  77 => 23,  74 => 22,  70 => 21,  65 => 19,  60 => 16,  57 => 15,  41 => 11,  37 => 10,  32 => 9,  29 => 8,  11 => 5,);
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
/*     {% javascripts '@BinovoElkarBackupBundle/Resources/public/js/show-policies.js' %}*/
/*         <script type="text/javascript" src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* <div class="row">*/
/* <div class="col-md-8 col-md-offset-2 text-centered">*/
/* <h3>{% trans %}Policies{% endtrans %}</h3>*/
/* */
/* {% for flashMessage in app.session.flashbag.get('showPolicies') %}*/
/*             <div class="control help-block alert alert-danger">*/
/*                 <p>{{ flashMessage }}</p>*/
/*             </div>*/
/* {% endfor %}*/
/* <table id="policies" class="table table-condensed table-bordered table-striped">*/
/*     <tr>*/
/*         {# sorting of properties based on query components #}*/
/*         <th class="ids">{% trans %}Id{% endtrans %}</th>*/
/*         <th>{% trans %}Name{% endtrans %}</th>*/
/*         {% if is_granted('ROLE_ADMIN') %}*/
/*         <th>{% trans %}Actions{% endtrans %}</th>*/
/*         {% endif %}*/
/* */
/*     </tr>*/
/* */
/*     {# table body #}*/
/*     {% for policy in pagination %}*/
/*     <tr>*/
/*         <td class="ids"><a href="{{ path('editPolicy', {id: policy.id}) }}">{{ policy.id }}</a></td>*/
/*         <td>{{ policy.name }}</td>*/
/*         {% if is_granted('ROLE_ADMIN') %}*/
/*         <td class="actions">*/
/*               <form action="{{ path('editPolicy', {id: policy.id}) }}" style="display:inline">*/
/*                 <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-pencil"></span> {% trans %}Edit{% endtrans %} </button>*/
/*               </form>*/
/*               <form data-bnv-message="{% trans with {'%name%': policy.name} %}Really delete policy %name%?{% endtrans %}" class="delete-policy" action="{{ path('deletePolicy', {id: policy.id}) }}" method="POST" style="display:inline">*/
/*                 <button class="btn btn-default btn-danger" type="submit"><span class="glyphicon glyphicon-trash"></span> {% trans %}Delete{% endtrans %} </button>*/
/*               </form>*/
/*         </td>*/
/*         {% endif %}*/
/* */
/*     </tr>*/
/*     {% endfor %}*/
/* </table>*/
/* {% if is_granted('ROLE_ADMIN') %}*/
/* <button class="btn btn-default pull-right" type="button" onclick="document.location.href='{{ path('editPolicy', {id: 'new'}) }}'"><span class="glyphicon glyphicon-plus"></span> {% trans %}New{% endtrans %}</button>*/
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
