<?php

/* BinovoElkarBackupBundle:Default:base.html.twig */
class __TwigTemplate_857d4f69435cf2a4999c2a6c910bdb7bee1018e0ea437fd77120de28b21265ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'scripts' => array($this, 'block_scripts'),
            'header' => array($this, 'block_header'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        echo "<!DOCTYPE html>
";
        // line 7
        echo "<html>
    <head>
        <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  \t\t\t<!-- Dojo 1.8.1-->
  \t\t\t<link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/dojo-release/dijit/themes/claro/claro.css"), "html", null, true);
        echo "\" media=\"screen\" />

        <!-- Bootstrap 3.3-->
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" media=\"screen\" />

        <!-- @ChristianGR elkarbackup theme -->
        ";
        // line 17
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "92f5b2c_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_92f5b2c_0") : $this->env->getExtension('asset')->getAssetUrl("css/92f5b2c_elkarbackup_1.css");
            // line 18
            echo "          <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" media=\"screen\" />
        ";
        } else {
            // asset "92f5b2c"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_92f5b2c") : $this->env->getExtension('asset')->getAssetUrl("css/92f5b2c.css");
            echo "          <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" media=\"screen\" />
        ";
        }
        unset($context["asset_url"]);
        // line 20
        echo "
        ";
        // line 21
        $this->displayBlock('scripts', $context, $blocks);
        // line 32
        echo "
    </head>
    <body class=\"claro\">

        <div id=\"top\">
          <div id=\"cont-top\">
            <div class=\"logo\">
                ";
        // line 39
        $this->displayBlock('header', $context, $blocks);
        // line 41
        echo "                <a href=\"";
        echo $this->env->getExtension('routing')->getPath("showClients");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/img/elkarbackup.png"), "html", null, true);
        echo "\" alt=\"ElkarBackup\" /></a>
            </div>

\t\t        <div class=\"navbar\" role=\"navigation\">
                ";
        // line 45
        $this->displayBlock('menu', $context, $blocks);
        // line 48
        echo "            </div>
          </div>
        </div>

        <div id=\"contenido\" class=\"container\">
            <div class=\"row\">
                ";
        // line 54
        $this->displayBlock('body', $context, $blocks);
        // line 56
        echo "            </div>

            <div class=\"row\">
                ";
        // line 59
        $this->displayBlock('footer', $context, $blocks);
        // line 61
        echo "            </div>
        </div>

    </body>
</html>
";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "ElkarBackup";
    }

    // line 21
    public function block_scripts($context, array $blocks = array())
    {
        // line 22
        echo "        <!-- jQuery -->
        <script type=\"text/javascript\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery/jquery-1.12.0.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Dojo -->
        <script type=\"text/javascript\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/dojo-release/dojo/dojo.js"), "html", null, true);
        echo "\" data-dojo-config=\"async: true\"></script>
        <!-- Bootstrap and Elkarbackup js -->
        <script type=\"text/javascript\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\" ></script>
            ";
        // line 28
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "02c4d9e_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_02c4d9e_0") : $this->env->getExtension('asset')->getAssetUrl("js/02c4d9e_base_1.js");
            // line 29
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
            ";
        } else {
            // asset "02c4d9e"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_02c4d9e") : $this->env->getExtension('asset')->getAssetUrl("js/02c4d9e.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
            ";
        }
        unset($context["asset_url"]);
        // line 31
        echo "        ";
    }

    // line 39
    public function block_header($context, array $blocks = array())
    {
        // line 40
        echo "                ";
    }

    // line 45
    public function block_menu($context, array $blocks = array())
    {
        // line 46
        echo "                    ";
        echo $this->env->getExtension('knp_menu')->render("BinovoElkarBackupBundle:Builder:mainMenu", array("allow_safe_labels" => true));
        echo "
                ";
    }

    // line 54
    public function block_body($context, array $blocks = array())
    {
        // line 55
        echo "                ";
    }

    // line 59
    public function block_footer($context, array $blocks = array())
    {
        // line 60
        echo "                ";
    }

    public function getTemplateName()
    {
        return "BinovoElkarBackupBundle:Default:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 60,  193 => 59,  189 => 55,  186 => 54,  179 => 46,  176 => 45,  172 => 40,  169 => 39,  165 => 31,  151 => 29,  147 => 28,  143 => 27,  138 => 25,  133 => 23,  130 => 22,  127 => 21,  121 => 9,  112 => 61,  110 => 59,  105 => 56,  103 => 54,  95 => 48,  93 => 45,  83 => 41,  81 => 39,  72 => 32,  70 => 21,  67 => 20,  53 => 18,  49 => 17,  43 => 14,  37 => 11,  32 => 9,  28 => 7,  25 => 5,);
    }
}
/* {##*/
/*  # @copyright 2012,2013 Binovo it Human Project, S.L.*/
/*  # @license http://www.opensource.org/licenses/bsd-license.php New-BSD*/
/*  #}*/
/* <!DOCTYPE html>*/
/* {% trans_default_domain 'BinovoElkarBackup' %}*/
/* <html>*/
/*     <head>*/
/*         <title>{% block title %}ElkarBackup{% endblock %}</title>*/
/*   			<!-- Dojo 1.8.1-->*/
/*   			<link rel="stylesheet" href="{{ asset('js/dojo-release/dijit/themes/claro/claro.css') }}" media="screen" />*/
/* */
/*         <!-- Bootstrap 3.3-->*/
/*         <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" media="screen" />*/
/* */
/*         <!-- @ChristianGR elkarbackup theme -->*/
/*         {% stylesheets '@BinovoElkarBackupBundle/Resources/public/css/elkarbackup.css' %}*/
/*           <link rel="stylesheet" href="{{ asset_url }}" media="screen" />*/
/*         {% endstylesheets %}*/
/* */
/*         {% block scripts %}*/
/*         <!-- jQuery -->*/
/*         <script type="text/javascript" src="{{ asset('js/jquery/jquery-1.12.0.min.js')}}"></script>*/
/*         <!-- Dojo -->*/
/*         <script type="text/javascript" src="{{ asset('js/dojo-release/dojo/dojo.js') }}" data-dojo-config="async: true"></script>*/
/*         <!-- Bootstrap and Elkarbackup js -->*/
/*         <script type="text/javascript" src="{{ asset('js/bootstrap/bootstrap.min.js') }}" ></script>*/
/*             {% javascripts '@BinovoElkarBackupBundle/Resources/public/js/base.js' %}*/
/*         <script type="text/javascript" src="{{ asset_url }}"></script>*/
/*             {% endjavascripts %}*/
/*         {% endblock %}*/
/* */
/*     </head>*/
/*     <body class="claro">*/
/* */
/*         <div id="top">*/
/*           <div id="cont-top">*/
/*             <div class="logo">*/
/*                 {% block header %}*/
/*                 {% endblock %}*/
/*                 <a href="{{path('showClients')}}"><img src="{{ asset('/img/elkarbackup.png') }}" alt="ElkarBackup" /></a>*/
/*             </div>*/
/* */
/* 		        <div class="navbar" role="navigation">*/
/*                 {% block menu %}*/
/*                     {{ knp_menu_render('BinovoElkarBackupBundle:Builder:mainMenu',{'allow_safe_labels': true})|raw }}*/
/*                 {% endblock %}*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/* */
/*         <div id="contenido" class="container">*/
/*             <div class="row">*/
/*                 {% block body %}*/
/*                 {% endblock %}*/
/*             </div>*/
/* */
/*             <div class="row">*/
/*                 {% block footer %}*/
/*                 {% endblock %}*/
/*             </div>*/
/*         </div>*/
/* */
/*     </body>*/
/* </html>*/
/* */
