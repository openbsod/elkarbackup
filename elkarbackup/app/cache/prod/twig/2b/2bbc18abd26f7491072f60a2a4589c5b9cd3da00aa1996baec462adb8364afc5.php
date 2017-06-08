<?php

/* BinovoElkarBackupBundle:Default:directory.html.twig */
class __TwigTemplate_6d2b82c297d07286a34081815ca8da444d5a938d235516931e30d376b6c69e09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("BinovoElkarBackupBundle:Default:base.html.twig", "BinovoElkarBackupBundle:Default:directory.html.twig", 5);
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
<p>
    <h3>
    ";
        // line 12
        echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute((isset($context["job"]) ? $context["job"] : null), "client", array()), "name", array()) . "/") . $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "name", array())) . (isset($context["path"]) ? $context["path"] : null)), "html", null, true);
        echo "
    </h3>

   <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editClient", array("id" => $this->getAttribute($this->getAttribute((isset($context["job"]) ? $context["job"] : null), "client", array()), "id", array()))), "html", null, true);
        echo "\"><b>";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Back to client", array(), "BinovoElkarBackup");
        echo "</b></a><br />
    <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editJob", array("idClient" => $this->getAttribute($this->getAttribute((isset($context["job"]) ? $context["job"] : null), "client", array()), "id", array()), "idJob" => $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "id", array()))), "html", null, true);
        echo "\"><b>";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Back to job", array(), "BinovoElkarBackup");
        echo "</b></a>
</p>

<p>
    <table id=\"directory\" class=\"table table-condensed table-bordered table-striped\">
        <tr>
            <th colspan=\"3\">";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["realPath"]) ? $context["realPath"] : null), "html", null, true);
        echo "</th>
        </tr>
        <tr>
            <th>";
        // line 25
        echo $this->env->getExtension('translator')->getTranslator()->trans("Name", array(), "BinovoElkarBackup");
        echo "</th>
            <th>";
        // line 26
        echo $this->env->getExtension('translator')->getTranslator()->trans("Modification date", array(), "BinovoElkarBackup");
        echo "</th>
            <th>";
        // line 27
        echo $this->env->getExtension('translator')->getTranslator()->trans("Actions", array(), "BinovoElkarBackup");
        echo "</th>
        </tr>

    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["content"]) ? $context["content"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
            // line 31
            echo "      ";
            if (($this->getAttribute($context["file"], 0, array()) != ".")) {
                // line 32
                echo " \t";
                if (((twig_length_filter($this->env, (isset($context["path"]) ? $context["path"] : null)) > 1) || (($this->getAttribute($context["file"], 0, array()) != "..") && ($this->getAttribute($context["file"], 0, array()) != ".")))) {
                    // line 33
                    echo "\t\t<tr>

\t\t    <td>

          ";
                    // line 37
                    if ($this->getAttribute($context["file"], 2, array())) {
                        // line 38
                        echo "\t\t        <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("showJobBackup", array("idClient" => $this->getAttribute($this->getAttribute((isset($context["job"]) ? $context["job"] : null), "client", array()), "id", array()), "idJob" => $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "id", array()), "path" => (((isset($context["path"]) ? $context["path"] : null) . $this->getAttribute($context["file"], 0, array())) . "/"), "action" => "view")), "html", null, true);
                        echo "\">
\t\t\t           <span class=\"glyphicon glyphicon-folder-open\"></span>
                 &nbsp;";
                        // line 40
                        echo twig_escape_filter($this->env, $this->getAttribute($context["file"], 0, array()), "html", null, true);
                        echo "
            </a>
          ";
                    } else {
                        // line 43
                        echo "            <span class=\"glyphicon glyphicon-file\"></span>&nbsp;";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["file"], 0, array()), "html", null, true);
                        echo "
          ";
                    }
                    // line 45
                    echo "
\t\t    </td>
\t\t    <td>
\t\t        ";
                    // line 48
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["file"], 1, array()), "format", array(0 => "Y-m-d H:i:s"), "method"), "html", null, true);
                    echo "
\t\t    </td>
\t\t    <td>
\t\t        ";
                    // line 51
                    if ((($this->getAttribute($context["file"], 0, array()) != "..") && ($this->getAttribute($context["file"], 0, array()) != "."))) {
                        // line 52
                        echo "
              ";
                        // line 53
                        if ($this->getAttribute($context["file"], 2, array())) {
                            // line 54
                            echo "                <a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("showJobBackup", array("idClient" => $this->getAttribute($this->getAttribute((isset($context["job"]) ? $context["job"] : null), "client", array()), "id", array()), "idJob" => $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "id", array()), "path" => (((isset($context["path"]) ? $context["path"] : null) . "/") . $this->getAttribute($context["file"], 0, array())), "action" => "download")), "html", null, true);
                            echo "\"><b>
                  ";
                            // line 55
                            echo $this->env->getExtension('translator')->getTranslator()->trans("Download as .tgz", array(), "BinovoElkarBackup");
                            // line 56
                            echo "                </b></a>
                ";
                            // line 57
                            if ((isset($context["isZipInstalled"]) ? $context["isZipInstalled"] : null)) {
                                // line 58
                                echo "                &nbsp;|&nbsp;
                <a href=\"";
                                // line 59
                                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("showJobBackup", array("idClient" => $this->getAttribute($this->getAttribute((isset($context["job"]) ? $context["job"] : null), "client", array()), "id", array()), "idJob" => $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "id", array()), "path" => (((isset($context["path"]) ? $context["path"] : null) . "/") . $this->getAttribute($context["file"], 0, array())), "action" => "downloadzip")), "html", null, true);
                                echo "\"><b>
                  ";
                                // line 60
                                echo $this->env->getExtension('translator')->getTranslator()->trans("Download as .zip", array(), "BinovoElkarBackup");
                                // line 61
                                echo "                </b></a>
                ";
                            }
                            // line 63
                            echo "              ";
                        } else {
                            // line 64
                            echo "                <a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("showJobBackup", array("idClient" => $this->getAttribute($this->getAttribute((isset($context["job"]) ? $context["job"] : null), "client", array()), "id", array()), "idJob" => $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "id", array()), "path" => (((isset($context["path"]) ? $context["path"] : null) . "/") . $this->getAttribute($context["file"], 0, array())), "action" => "download")), "html", null, true);
                            echo "\"><b>
                  ";
                            // line 65
                            echo $this->env->getExtension('translator')->getTranslator()->trans("Download", array(), "BinovoElkarBackup");
                            // line 66
                            echo "                </b></a>
              ";
                        }
                        // line 68
                        echo "            ";
                    }
                    // line 69
                    echo "\t\t    </td>
\t\t</tr>

\t";
                }
                // line 73
                echo "      ";
            }
            // line 74
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "</p>

";
    }

    public function getTemplateName()
    {
        return "BinovoElkarBackupBundle:Default:directory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 75,  184 => 74,  181 => 73,  175 => 69,  172 => 68,  168 => 66,  166 => 65,  161 => 64,  158 => 63,  154 => 61,  152 => 60,  148 => 59,  145 => 58,  143 => 57,  140 => 56,  138 => 55,  133 => 54,  131 => 53,  128 => 52,  126 => 51,  120 => 48,  115 => 45,  109 => 43,  103 => 40,  97 => 38,  95 => 37,  89 => 33,  86 => 32,  83 => 31,  79 => 30,  73 => 27,  69 => 26,  65 => 25,  59 => 22,  48 => 16,  42 => 15,  36 => 12,  31 => 9,  28 => 8,  11 => 5,);
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
/* <p>*/
/*     <h3>*/
/*     {{ job.client.name ~ '/' ~ job.name ~ path }}*/
/*     </h3>*/
/* */
/*    <a href="{{ path('editClient', {id: job.client.id}) }}"><b>{% trans %}Back to client{% endtrans %}</b></a><br />*/
/*     <a href="{{ path('editJob',    {idClient: job.client.id, idJob: job.id}) }}"><b>{% trans %}Back to job{% endtrans %}</b></a>*/
/* </p>*/
/* */
/* <p>*/
/*     <table id="directory" class="table table-condensed table-bordered table-striped">*/
/*         <tr>*/
/*             <th colspan="3">{{ realPath }}</th>*/
/*         </tr>*/
/*         <tr>*/
/*             <th>{% trans %}Name{% endtrans %}</th>*/
/*             <th>{% trans %}Modification date{% endtrans %}</th>*/
/*             <th>{% trans %}Actions{% endtrans %}</th>*/
/*         </tr>*/
/* */
/*     {% for file in content %}*/
/*       {% if file.0 != "." %}*/
/*  	{% if path|length > 1 or ( file.0 != ".." and file.0 != ".") %}*/
/* 		<tr>*/
/* */
/* 		    <td>*/
/* */
/*           {% if file.2 %}*/
/* 		        <a href="{{ path('showJobBackup', {idClient: job.client.id, idJob: job.id , path: path  ~ file.0 ~ '/' , action: 'view'}) }}">*/
/* 			           <span class="glyphicon glyphicon-folder-open"></span>*/
/*                  &nbsp;{{ file.0 }}*/
/*             </a>*/
/*           {% else %}*/
/*             <span class="glyphicon glyphicon-file"></span>&nbsp;{{ file.0 }}*/
/*           {% endif %}*/
/* */
/* 		    </td>*/
/* 		    <td>*/
/* 		        {{ file.1.format('Y-m-d H:i:s') }}*/
/* 		    </td>*/
/* 		    <td>*/
/* 		        {% if file.0 != ".." and file.0 != "." %}*/
/* */
/*               {% if file.2 %}*/
/*                 <a href="{{ path('showJobBackup', {idClient: job.client.id, idJob: job.id, path: path ~ '/' ~ file.0, action: 'download'}) }}"><b>*/
/*                   {% trans %}Download as .tgz{% endtrans %}*/
/*                 </b></a>*/
/*                 {% if isZipInstalled %}*/
/*                 &nbsp;|&nbsp;*/
/*                 <a href="{{ path('showJobBackup', {idClient: job.client.id, idJob: job.id, path: path ~ '/' ~ file.0, action: 'downloadzip'}) }}"><b>*/
/*                   {% trans %}Download as .zip{% endtrans %}*/
/*                 </b></a>*/
/*                 {% endif %}*/
/*               {% else %}*/
/*                 <a href="{{ path('showJobBackup', {idClient: job.client.id, idJob: job.id, path: path ~ '/' ~ file.0, action: 'download'}) }}"><b>*/
/*                   {% trans %}Download{% endtrans %}*/
/*                 </b></a>*/
/*               {% endif %}*/
/*             {% endif %}*/
/* 		    </td>*/
/* 		</tr>*/
/* */
/* 	{% endif %}*/
/*       {% endif %}*/
/*     {% endfor %}*/
/* </p>*/
/* */
/* {% endblock %}*/
/* */
