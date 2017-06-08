<?php

/* BinovoElkarBackupBundle:Default:logreport.html.twig */
class __TwigTemplate_c56c7846dc82e5c789d99d29819089ac133b140a2def756c241c039a9784e7fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        echo "<html>
    <head>
        <base href=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo "\" target=\"_blank\" />
    </head>
    <body>
        <table>
            <tr>
                <th>Client</th>
                <th>Job</th>
                <th>Time</th>
                <th>Level</th>
                <th>Message</th>
            </tr>
";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 19
            echo "            <tr>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["job"]) ? $context["job"] : null), "getClient", array()), "getName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "getName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["message"], "dateTime", array()), "format", array(0 => "Y-m-d H:i:s"), "method"), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "levelName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "message", array()), "html", null, true);
            echo "</td>
            </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        </table>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "BinovoElkarBackupBundle:Default:logreport.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 27,  60 => 24,  56 => 23,  52 => 22,  48 => 21,  44 => 20,  41 => 19,  37 => 18,  23 => 7,  19 => 5,);
    }
}
/* {##*/
/*  # @copyright 2012,2013 Binovo it Human Project, S.L.*/
/*  # @license http://www.opensource.org/licenses/bsd-license.php New-BSD*/
/*  #}*/
/* <html>*/
/*     <head>*/
/*         <base href="{{base}}" target="_blank" />*/
/*     </head>*/
/*     <body>*/
/*         <table>*/
/*             <tr>*/
/*                 <th>Client</th>*/
/*                 <th>Job</th>*/
/*                 <th>Time</th>*/
/*                 <th>Level</th>*/
/*                 <th>Message</th>*/
/*             </tr>*/
/* {% for message in messages %}*/
/*             <tr>*/
/*                 <td>{{job.getClient.getName}}</td>*/
/*                 <td>{{job.getName}}</td>*/
/*                 <td>{{ message.dateTime.format('Y-m-d H:i:s') }}</td>*/
/*                 <td>{{ message.levelName }}</td>*/
/*                 <td>{{ message.message }}</td>*/
/*             </tr>*/
/* {% endfor %}*/
/*         </table>*/
/*     </body>*/
/* </html>*/
/* */
