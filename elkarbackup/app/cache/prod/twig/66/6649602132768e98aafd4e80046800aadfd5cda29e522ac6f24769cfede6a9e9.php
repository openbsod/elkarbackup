<?php

/* BinovoElkarBackupBundle:Default:fields.html.twig */
class __TwigTemplate_05a44ddd9d3c3d60580b3246e6dc41293717fda0a13f10b7085ed9ba774ce0ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_row' => array($this, 'block_form_row'),
            'form_label' => array($this, 'block_form_label'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 9
        $this->displayBlock('form_row', $context, $blocks);
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('form_label', $context, $blocks);
        // line 42
        echo "
";
        // line 43
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 47
        echo "
";
        // line 48
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 80
        echo "
";
        // line 81
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 90
        echo "
";
        // line 91
        $this->displayBlock('form_errors', $context, $blocks);
    }

    // line 9
    public function block_form_row($context, array $blocks = array())
    {
        // line 10
        ob_start();
        // line 11
        echo "  ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "block_prefixes", array()), 1, array()) == "percent")) {
            // line 12
            echo "    <div class=\"form-group has-feedback\">
  ";
        } else {
            // line 14
            echo "    <div class=\"form-group\">
  ";
        }
        // line 16
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label');
        echo "
        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
        <div class=\"col-xs-12 col-md-9\">
          ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 25
    public function block_form_label($context, array $blocks = array())
    {
        // line 26
        ob_start();
        // line 27
        echo "    ";
        if ( !(isset($context["compound"]) ? $context["compound"] : null)) {
            // line 28
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("for" => (isset($context["id"]) ? $context["id"] : null)));
            // line 29
            echo "    ";
        }
        // line 30
        echo "    ";
        if ((isset($context["required"]) ? $context["required"] : null)) {
            // line 31
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
            // line 32
            echo "    ";
        }
        // line 33
        echo "    ";
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : null))) {
            // line 34
            echo "        ";
            $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : null));
            // line 35
            echo "    ";
        }
        // line 36
        echo "    ";
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " control-label col-xs-12 col-md-3"))));
        // line 37
        echo "    <label";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
        if ((isset($context["required"]) ? $context["required"] : null)) {
            // line 38
            echo "      <span class=\"required\" title=\"";
            echo $this->env->getExtension('translator')->getTranslator()->trans("This field is required", array(), "messages");
            echo "\">*</span>
    ";
        }
        // line 39
        echo "</label>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 43
    public function block_percent_widget($context, array $blocks = array())
    {
        // line 44
        echo "  ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
  <span class=\"form-control-feedback percent\">%</span>
";
    }

    // line 48
    public function block_form_widget_simple($context, array $blocks = array())
    {
        // line 49
        ob_start();
        // line 50
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "text")) : ("text"));
        // line 51
        echo "    ";
        if (((isset($context["type"]) ? $context["type"] : null) == "file")) {
            // line 52
            echo "    <div class=\"input-group\">
      <span class=\"input-group-btn\">
        <span class=\"btn btn-elkarbackup btn-file\"><span class=\"glyphicon glyphicon-folder-open\"></span> ";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Browse", array(), "BinovoElkarBackup"), "html", null, true);
            echo "&hellip; <input type=\"file\" ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            echo " /></span>
      </span>
      <input type=\"text\" class=\"form-control\" id=\"visual_";
            // line 56
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" readonly>
    </div>

    <script type=\"text/javascript\">
        dojo.connect(dojo.byId('";
            // line 60
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "'), 'onchange',
                     function() {
                         dojo.byId('visual_";
            // line 62
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "').value = dojo.byId('";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "').value;
                     });
        dojo.connect(dojo.byId('visual_";
            // line 64
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "'), 'onchange',
                     function(){
                         dojo.byId('";
            // line 66
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "').value = dojo.byId('visual_";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "').value;
                     });
    </script>
    ";
            // line 72
            echo "    ";
        } elseif ((((isset($context["id"]) ? $context["id"] : null) == "Client_quota") && ((isset($context["value"]) ? $context["value"] : null) > 0))) {
            // line 73
            echo "      ";
            $context["value"] = (((isset($context["value"]) ? $context["value"] : null) / 1024) / 1024);
            // line 74
            echo "      <input type=\"";
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
            echo "\" ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            echo " ";
            if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : null))) {
                echo "value=\"";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["value"]) ? $context["value"] : null), 2, ".", ","), "html", null, true);
                echo "\" ";
            }
            echo "/>
    ";
        } else {
            // line 76
            echo "      <input type=\"";
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
            echo "\" ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            echo " ";
            if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : null))) {
                echo "value=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                echo "\" ";
            }
            echo "/>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 81
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 82
        ob_start();
        // line 83
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
    ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 85
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget');
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "label", array()), "html", null, true);
            echo "<br />
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 91
    public function block_form_errors($context, array $blocks = array())
    {
        // line 92
        ob_start();
        // line 93
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            // line 94
            echo "<div class=\"control-group error-top\">
    <div class=\"alert alert-danger\">
        ";
            // line 96
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 97
                echo "            <p>";
                echo twig_escape_filter($this->env, (((null === $this->getAttribute(                // line 98
$context["error"], "messagePluralization", array()))) ? ($this->env->getExtension('translator')->trans($this->getAttribute(                // line 99
$context["error"], "messageTemplate", array()), $this->getAttribute($context["error"], "messageParameters", array()), "validators")) : ($this->env->getExtension('translator')->transchoice($this->getAttribute(                // line 100
$context["error"], "messageTemplate", array()), $this->getAttribute($context["error"], "messagePluralization", array()), $this->getAttribute($context["error"], "messageParameters", array()), "validators"))), "html", null, true);
                // line 101
                echo "</p>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "    </div>
</div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "BinovoElkarBackupBundle:Default:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  315 => 103,  308 => 101,  306 => 100,  305 => 99,  304 => 98,  302 => 97,  298 => 96,  294 => 94,  291 => 93,  289 => 92,  286 => 91,  280 => 87,  269 => 85,  265 => 84,  260 => 83,  258 => 82,  255 => 81,  238 => 76,  224 => 74,  221 => 73,  218 => 72,  210 => 66,  205 => 64,  198 => 62,  193 => 60,  186 => 56,  179 => 54,  175 => 52,  172 => 51,  169 => 50,  167 => 49,  164 => 48,  156 => 44,  153 => 43,  147 => 39,  141 => 38,  124 => 37,  121 => 36,  118 => 35,  115 => 34,  112 => 33,  109 => 32,  106 => 31,  103 => 30,  100 => 29,  97 => 28,  94 => 27,  92 => 26,  89 => 25,  80 => 19,  75 => 17,  70 => 16,  66 => 14,  62 => 12,  59 => 11,  57 => 10,  54 => 9,  50 => 91,  47 => 90,  45 => 81,  42 => 80,  40 => 48,  37 => 47,  35 => 43,  32 => 42,  30 => 25,  27 => 24,  25 => 9,);
    }
}
/* {##*/
/*  # @copyright 2012,2013 Binovo it Human Project, S.L.*/
/*  # @license http://www.opensource.org/licenses/bsd-license.php New-BSD*/
/*  #}*/
/* {#*/
/*  Customizations for*/
/*  vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/*/
/* #}*/
/* {% block form_row %}*/
/* {% spaceless %}*/
/*   {% if form.vars.block_prefixes.1 == 'percent' %}*/
/*     <div class="form-group has-feedback">*/
/*   {% else %}*/
/*     <div class="form-group">*/
/*   {% endif %}*/
/*         {{ form_label(form) }}*/
/*         {{ form_errors(form) }}*/
/*         <div class="col-xs-12 col-md-9">*/
/*           {{ form_widget(form) }}*/
/*         </div>*/
/*     </div>*/
/* {% endspaceless %}*/
/* {% endblock form_row %}*/
/* */
/* {% block form_label %}*/
/* {% spaceless %}*/
/*     {% if not compound %}*/
/*         {% set label_attr = label_attr|merge({'for': id}) %}*/
/*     {% endif %}*/
/*     {% if required %}*/
/*         {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}*/
/*     {% endif %}*/
/*     {% if label is empty %}*/
/*         {% set label = name|humanize %}*/
/*     {% endif %}*/
/*     {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' control-label col-xs-12 col-md-3')|trim}) %}*/
/*     <label{% for attrname, attrvalue in label_attr %} {{ attrname }}="{{ attrvalue }}"{% endfor %}>{{ label|trans({}, translation_domain) }}{% if required %}*/
/*       <span class="required" title="{% trans %}This field is required{% endtrans %}">*</span>*/
/*     {% endif %}</label>*/
/* {% endspaceless %}*/
/* {% endblock form_label %}*/
/* */
/* {% block percent_widget %}*/
/*   {{ block('form_widget_simple') }}*/
/*   <span class="form-control-feedback percent">%</span>*/
/* {% endblock %}*/
/* */
/* {% block form_widget_simple %}*/
/* {% spaceless %}*/
/*     {% set type = type|default('text') %}*/
/*     {% if type == 'file' %}*/
/*     <div class="input-group">*/
/*       <span class="input-group-btn">*/
/*         <span class="btn btn-elkarbackup btn-file"><span class="glyphicon glyphicon-folder-open"></span> {{ 'Browse'|trans({}, 'BinovoElkarBackup') }}&hellip; <input type="file" {{ block('widget_attributes') }} /></span>*/
/*       </span>*/
/*       <input type="text" class="form-control" id="visual_{{id}}" readonly>*/
/*     </div>*/
/* */
/*     <script type="text/javascript">*/
/*         dojo.connect(dojo.byId('{{id}}'), 'onchange',*/
/*                      function() {*/
/*                          dojo.byId('visual_{{id}}').value = dojo.byId('{{id}}').value;*/
/*                      });*/
/*         dojo.connect(dojo.byId('visual_{{id}}'), 'onchange',*/
/*                      function(){*/
/*                          dojo.byId('{{id}}').value = dojo.byId('visual_{{id}}').value;*/
/*                      });*/
/*     </script>*/
/*     {#*/
/*       Show Quota in GB*/
/*     #}*/
/*     {% elseif id == 'Client_quota' and value > 0 %}*/
/*       {% set value = value / 1024 / 1024 %}*/
/*       <input type="{{ type }}" {{ block('widget_attributes') }} {% if value is not empty %}value="{{ value|number_format(2, '.', ',') }}" {% endif %}/>*/
/*     {% else %}*/
/*       <input type="{{ type }}" {{ block('widget_attributes') }} {% if value is not empty %}value="{{ value }}" {% endif %}/>*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock form_widget_simple %}*/
/* */
/* {% block choice_widget_expanded %}*/
/* {% spaceless %}*/
/*     <div {{ block('widget_container_attributes') }}>*/
/*     {% for child in form %}*/
/*         {{ form_widget(child) }} {{child.vars.label}}<br />*/
/*     {% endfor %}*/
/*     </div>*/
/* {% endspaceless %}*/
/* {% endblock choice_widget_expanded %}*/
/* */
/* {% block form_errors %}*/
/* {% spaceless %}*/
/*     {% if errors|length > 0 %}*/
/* <div class="control-group error-top">*/
/*     <div class="alert alert-danger">*/
/*         {% for error in errors %}*/
/*             <p>{{*/
/*                 error.messagePluralization is null*/
/*                     ? error.messageTemplate|trans(error.messageParameters, 'validators')*/
/*                     : error.messageTemplate|transchoice(error.messagePluralization, error.messageParameters, 'validators')*/
/*             }}</p>*/
/*         {% endfor %}*/
/*     </div>*/
/* </div>*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock form_errors %}*/
/* */
