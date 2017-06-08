<?php

/* BinovoElkarBackupBundle:Default:logs.html.twig */
class __TwigTemplate_334cd69960abcd5870badcd502517602efca479fa675fd0b73fb39f811c49c2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("BinovoElkarBackupBundle:Default:base.html.twig", "BinovoElkarBackupBundle:Default:logs.html.twig", 5);
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
<h3>";
        // line 10
        echo $this->env->getExtension('translator')->getTranslator()->trans("Logs", array(), "BinovoElkarBackup");
        echo "</h3>

<form action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("showLogs");
        echo "\">
<table id=\"logs\" class=\"table table-condensed table-hover table-striped\">
    <tr>
        ";
        // line 16
        echo "        <th>";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Time", array(), "BinovoElkarBackup");
        echo "</th>
        <th style=\"width: 160px;\">";
        // line 17
        echo $this->env->getExtension('translator')->getTranslator()->trans("Level", array(), "BinovoElkarBackup");
        echo "<br />
            ";
        // line 18
        echo $this->env->getExtension('BnvTwigExtension')->filterSelect((isset($context["levels"]) ? $context["levels"] : null), array("style" => "width: 150px;"));
        echo "</th>
        <th>";
        // line 19
        echo $this->env->getExtension('translator')->getTranslator()->trans("Source", array(), "BinovoElkarBackup");
        echo "<br />
            ";
        // line 20
        echo $this->env->getExtension('BnvTwigExtension')->filterSelect((isset($context["source"]) ? $context["source"] : null), array("style" => "width: 150px;"));
        echo "</th>
        <th>";
        // line 21
        echo $this->env->getExtension('translator')->getTranslator()->trans("User", array(), "BinovoElkarBackup");
        echo "</th>
        <th>";
        // line 22
        echo $this->env->getExtension('translator')->getTranslator()->trans("Message", array(), "BinovoElkarBackup");
        echo "</th>
        <th>";
        // line 23
        echo $this->env->getExtension('translator')->getTranslator()->trans("Object", array(), "BinovoElkarBackup");
        echo "<br />
            ";
        // line 24
        echo $this->env->getExtension('BnvTwigExtension')->filterText((isset($context["object"]) ? $context["object"] : null), array("style" => "width: 150px;"));
        echo "</th>
    </tr>

    ";
        // line 28
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["logRecord"]) {
            // line 29
            echo "    <tr class=\"
    ";
            // line 30
            if (($this->getAttribute($context["logRecord"], "levelName", array()) == "ERROR")) {
                echo "danger ";
            }
            // line 31
            echo "    ";
            if (($this->getAttribute($context["logRecord"], "levelName", array()) == "WARNING")) {
                echo "warning ";
            }
            // line 32
            echo "\t\t";
            if (($this->getAttribute($context["logRecord"], "message", array()) == "OK")) {
                echo "success ";
            }
            // line 33
            echo "    logs\" >

        <td style=\"white-space: nowrap;\">";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["logRecord"], "dateTime", array()), "format", array(0 => "Y-m-d H:i:s"), "method"), "html", null, true);
            echo "</td>
        <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["logRecord"], "levelName", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["logRecord"], "source", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["logRecord"], "userName", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["logRecord"], "message", array()), "html", null, true);
            echo "</td>
        <td style=\"white-space: nowrap;\">";
            // line 40
            if ($this->getAttribute($context["logRecord"], "link", array())) {
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["logRecord"], "link", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["logRecord"], "link", array()), "html", null, true);
                echo "</a>";
            }
            echo "</td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['logRecord'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "</table>
</form>
<div class=\"navigation binovo-pagination\">
    ";
        // line 46
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : null));
        echo "
</div>


";
    }

    public function getTemplateName()
    {
        return "BinovoElkarBackupBundle:Default:logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 46,  145 => 43,  130 => 40,  126 => 39,  122 => 38,  118 => 37,  114 => 36,  110 => 35,  106 => 33,  101 => 32,  96 => 31,  92 => 30,  89 => 29,  84 => 28,  78 => 24,  74 => 23,  70 => 22,  66 => 21,  62 => 20,  58 => 19,  54 => 18,  50 => 17,  45 => 16,  39 => 12,  34 => 10,  31 => 9,  28 => 8,  11 => 5,);
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
/* <h3>{% trans %}Logs{% endtrans %}</h3>*/
/* */
/* <form action="{{ path('showLogs') }}">*/
/* <table id="logs" class="table table-condensed table-hover table-striped">*/
/*     <tr>*/
/*         {# sorting of properties based on query components #}*/
/*         <th>{% trans %}Time{% endtrans %}</th>*/
/*         <th style="width: 160px;">{% trans %}Level{% endtrans %}<br />*/
/*             {{ filterSelect(levels, {style: "width: 150px;"}) }}</th>*/
/*         <th>{% trans %}Source{% endtrans %}<br />*/
/*             {{ filterSelect(source, {style: "width: 150px;"}) }}</th>*/
/*         <th>{% trans %}User{% endtrans %}</th>*/
/*         <th>{% trans %}Message{% endtrans %}</th>*/
/*         <th>{% trans %}Object{% endtrans %}<br />*/
/*             {{ filterText(object, {style: "width: 150px;"}) }}</th>*/
/*     </tr>*/
/* */
/*     {# table body #}*/
/*     {% for logRecord in pagination %}*/
/*     <tr class="*/
/*     {% if (logRecord.levelName) == 'ERROR'%}danger {% endif %}*/
/*     {% if (logRecord.levelName) == 'WARNING'%}warning {% endif %}*/
/* 		{% if (logRecord.message) == 'OK'%}success {% endif %}*/
/*     logs" >*/
/* */
/*         <td style="white-space: nowrap;">{{ logRecord.dateTime.format('Y-m-d H:i:s') }}</td>*/
/*         <td>{{ logRecord.levelName }}</td>*/
/*         <td>{{ logRecord.source }}</td>*/
/*         <td>{{ logRecord.userName }}</td>*/
/*         <td>{{ logRecord.message }}</td>*/
/*         <td style="white-space: nowrap;">{% if logRecord.link %}<a href="{{ logRecord.link }}">{{ logRecord.link }}</a>{% endif %}</td>*/
/*     </tr>*/
/*     {% endfor %}*/
/* </table>*/
/* </form>*/
/* <div class="navigation binovo-pagination">*/
/*     {{ knp_pagination_render(pagination)|raw }}*/
/* </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
