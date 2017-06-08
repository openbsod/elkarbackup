<?php

/* BinovoElkarBackupBundle:Default:policy.html.twig */
class __TwigTemplate_f531206ccc59d4553cf801c5f72fd36836b96f33093b6a260e46d1c51d8ee83f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 6
        $this->parent = $this->loadTemplate("BinovoElkarBackupBundle:Default:base.html.twig", "BinovoElkarBackupBundle:Default:policy.html.twig", 6);
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

    // line 9
    public function block_scripts($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        $this->displayParentBlock("scripts", $context, $blocks);
        echo "
    ";
        // line 11
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "ae16382_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ae16382_0") : $this->env->getExtension('asset')->getAssetUrl("js/ae16382_edit-policy_1.js");
            // line 12
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "ae16382"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ae16382") : $this->env->getExtension('asset')->getAssetUrl("js/ae16382.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 14
        echo "<style>
.dijitTabContainerNoLayout {
width:auto;
}
legend.panel-legend {
font-size: 14px;
}
</style>
";
    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        // line 25
        echo "
<form id=\"form\" class=\"form-horizontal\" action=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("savePolicy", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array()), "id", array()))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo ">
    <fieldset>
        <h3>";
        // line 28
        echo $this->env->getExtension('translator')->getTranslator()->trans("Edit policy", array(), "BinovoElkarBackup");
        echo "</h3>
        <div class=\"row\">
            <div class=\"col-md-6\">
                ";
        // line 31
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "BinovoElkarBackupBundle:Default:fields.html.twig"));
        // line 32
        echo "                <div>
                    <div class=\"control-group\">
                        <div id=\"errorMessage\" class=\"controls help-block\">
                            <div id=\"hourlyCountMsg\" class=\"hide alert alert-danger\">
                                ";
        // line 36
        echo $this->env->getExtension('translator')->getTranslator()->trans("Hourly backups activated, hourly count can not be 0", array(), "BinovoElkarBackup");
        // line 37
        echo "                            </div>
                            <div id=\"dailyCountMsg\" class=\"hide alert alert-danger\">
                                ";
        // line 39
        echo $this->env->getExtension('translator')->getTranslator()->trans("Daily backups activated, daily count can not be 0", array(), "BinovoElkarBackup");
        // line 40
        echo "                            </div>
                            <div id=\"weeklyCountMsg\" class=\"hide alert alert-danger\">
                                ";
        // line 42
        echo $this->env->getExtension('translator')->getTranslator()->trans("Weekly backups activated, weekly count can not be 0", array(), "BinovoElkarBackup");
        // line 43
        echo "                            </div>
                            <div id=\"monthlyCountMsg\" class=\"hide alert alert-danger\">
                                ";
        // line 45
        echo $this->env->getExtension('translator')->getTranslator()->trans("Monthly backups activated, monthly count can not be 0", array(), "BinovoElkarBackup");
        // line 46
        echo "                            </div>
                            <div id=\"yearlyCountMsg\" class=\"hide alert alert-danger\">
                            ";
        // line 48
        echo $this->env->getExtension('translator')->getTranslator()->trans("Yearly backups activated, yearly count can not be 0", array(), "BinovoElkarBackup");
        // line 49
        echo "                            </div>
                            <div id=\"rotationMsg\" class=\"hide alert alert-danger\">
                                ";
        // line 51
        echo $this->env->getExtension('translator')->getTranslator()->trans("Can not have the retention count of the first backup level set to 1, and have a second backup level", array(), "BinovoElkarBackup");
        // line 52
        echo "                            </div>
                        </div>
                    </div>
                    ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
                </div>
                <div class=\"control-group\">
                    <div data-dojo-type=\"dijit/layout/TabContainer\" style=\"height: 100%;\" data-dojo-props=\"doLayout:false\" class=\"controls\">
                        <div id=\"duringTheDay-panel\" data-dojo-type=\"dijit/layout/ContentPane\" title=\"";
        // line 59
        echo $this->env->getExtension('translator')->getTranslator()->trans("During the day", array(), "BinovoElkarBackup");
        echo "\">
                            <label class=\"checkbox\">
                                <input type=\"checkbox\" class=\"activation-controller\" id=\"duringTheDay-activation\" /> ";
        // line 61
        echo $this->env->getExtension('translator')->getTranslator()->trans("Make backups during the day", array(), "BinovoElkarBackup");
        // line 62
        echo "                            </label>
                            <fieldset  id=\"hourlyHours\">
                                <legend class=\"panel-legend\">";
        // line 64
        echo $this->env->getExtension('translator')->getTranslator()->trans("Time of day", array(), "BinovoElkarBackup");
        echo "</legend>
                                <div data-dojo-type=\"dijit/Tooltip\" data-dojo-props=\"connectId:'hourlyCount'\">
                                    ";
        // line 66
        echo $this->env->getExtension('translator')->getTranslator()->trans("The number of copies to make during the day", array(), "BinovoElkarBackup");
        // line 67
        echo "                                </div>
                                <button type=\"button\" class=\"btn btn-default btn-sm\" id=\"hourlyHoursAdd\">
                                  <span class=\"glyphicon-plus\"> ";
        // line 69
        echo $this->env->getExtension('translator')->getTranslator()->trans("Add", array(), "BinovoElkarBackup");
        // line 70
        echo "                                </button>
                            </fieldset>
                            <fieldset>
                                <legend class=\"panel-legend\">";
        // line 73
        echo $this->env->getExtension('translator')->getTranslator()->trans("Days of the week", array(), "BinovoElkarBackup");
        echo "</legend>
                                <label class=\"checkbox\">
                                    <input id=\"hourly-monday\" type=\"checkbox\" /> ";
        // line 75
        echo $this->env->getExtension('translator')->getTranslator()->trans("Monday", array(), "BinovoElkarBackup");
        // line 76
        echo "                                </label>
                                <label class=\"checkbox\">
                                    <input id=\"hourly-tuesday\" type=\"checkbox\" /> ";
        // line 78
        echo $this->env->getExtension('translator')->getTranslator()->trans("Tuesday", array(), "BinovoElkarBackup");
        // line 79
        echo "                                </label>
                                <label class=\"checkbox\">
                                    <input id=\"hourly-wednesday\" type=\"checkbox\" /> ";
        // line 81
        echo $this->env->getExtension('translator')->getTranslator()->trans("Wednesday", array(), "BinovoElkarBackup");
        // line 82
        echo "                                </label>
                                <label class=\"checkbox\">
                                    <input id=\"hourly-thursday\" type=\"checkbox\" /> ";
        // line 84
        echo $this->env->getExtension('translator')->getTranslator()->trans("Thursday", array(), "BinovoElkarBackup");
        // line 85
        echo "                                </label>
                                <label class=\"checkbox\">
                                    <input id=\"hourly-friday\" type=\"checkbox\" /> ";
        // line 87
        echo $this->env->getExtension('translator')->getTranslator()->trans("Friday", array(), "BinovoElkarBackup");
        // line 88
        echo "                                </label>
                                <label class=\"checkbox\">
                                    <input id=\"hourly-saturday\" type=\"checkbox\" /> ";
        // line 90
        echo $this->env->getExtension('translator')->getTranslator()->trans("Saturday", array(), "BinovoElkarBackup");
        // line 91
        echo "                                </label>
                                <label class=\"checkbox\">
                                    <input id=\"hourly-sunday\" type=\"checkbox\" /> ";
        // line 93
        echo $this->env->getExtension('translator')->getTranslator()->trans("Sunday", array(), "BinovoElkarBackup");
        // line 94
        echo "                                </label>
                            </fieldset>
                            <fieldset>
                                <legend class=\"panel-legend\">";
        // line 97
        echo $this->env->getExtension('translator')->getTranslator()->trans("Retention policy", array(), "BinovoElkarBackup");
        echo "</legend>
                                ";
        // line 98
        echo $this->env->getExtension('translator')->getTranslator()->trans("Number of copies to keep", array(), "BinovoElkarBackup");
        echo "<br>
                                <input data-dojo-type=\"dijit/form/NumberSpinner\"
                                       value=\"0\"
                                       data-dojo-props=\"id: 'hourlyCount', intermediateChanges: true, smallDelta: 1, constraints: {min:0,places:0}, style: 'width: 100px'\" />
                            </fieldset>
                        </div>

                        <div id=\"daily-panel\" data-dojo-type=\"dijit/layout/ContentPane\" title=\"";
        // line 105
        echo $this->env->getExtension('translator')->getTranslator()->trans("Daily", array(), "BinovoElkarBackup");
        echo "\">
                            <label class=\"checkbox\">
                                <input type=\"checkbox\" class=\"activation-controller\" id=\"daily-activation\" /> ";
        // line 107
        echo $this->env->getExtension('translator')->getTranslator()->trans("Make daily backups", array(), "BinovoElkarBackup");
        // line 108
        echo "                            </label>
                            <fieldset>
                                <legend class=\"panel-legend\">";
        // line 110
        echo $this->env->getExtension('translator')->getTranslator()->trans("Time of day", array(), "BinovoElkarBackup");
        echo "</legend>
                                <input id=\"dailyHour\" data-dojo-type=\"dijit/form/TimeTextBox\" data-dojo-props=\"constraints:{timePattern: 'HH:mm', clickableIncrement: 'T00:15:00',visibleIncrement: 'T00:15:00', visibleRange: 'T01:00:00'}, value: '09:00'\" />
                            </fieldset>
                            <fieldset>
                                <legend class=\"panel-legend\">";
        // line 114
        echo $this->env->getExtension('translator')->getTranslator()->trans("Days of the week", array(), "BinovoElkarBackup");
        echo "</legend>
                                <label class=\"checkbox\">
                                    <input id=\"daily-monday\" type=\"checkbox\" /> ";
        // line 116
        echo $this->env->getExtension('translator')->getTranslator()->trans("Monday", array(), "BinovoElkarBackup");
        // line 117
        echo "                                </label>
                                <label class=\"checkbox\">
                                    <input id=\"daily-tuesday\" type=\"checkbox\" /> ";
        // line 119
        echo $this->env->getExtension('translator')->getTranslator()->trans("Tuesday", array(), "BinovoElkarBackup");
        // line 120
        echo "                                </label>
                                <label class=\"checkbox\">
                                    <input id=\"daily-wednesday\" type=\"checkbox\" /> ";
        // line 122
        echo $this->env->getExtension('translator')->getTranslator()->trans("Wednesday", array(), "BinovoElkarBackup");
        // line 123
        echo "                                </label>
                                <label class=\"checkbox\">
                                    <input id=\"daily-thursday\" type=\"checkbox\" /> ";
        // line 125
        echo $this->env->getExtension('translator')->getTranslator()->trans("Thursday", array(), "BinovoElkarBackup");
        // line 126
        echo "                                </label>
                                <label class=\"checkbox\">
                                    <input id=\"daily-friday\" type=\"checkbox\" /> ";
        // line 128
        echo $this->env->getExtension('translator')->getTranslator()->trans("Friday", array(), "BinovoElkarBackup");
        // line 129
        echo "                                </label>
                                <label class=\"checkbox\">
                                    <input id=\"daily-saturday\" type=\"checkbox\" /> ";
        // line 131
        echo $this->env->getExtension('translator')->getTranslator()->trans("Saturday", array(), "BinovoElkarBackup");
        // line 132
        echo "                                </label>
                                <label class=\"checkbox\">
                                    <input id=\"daily-sunday\" type=\"checkbox\" /> ";
        // line 134
        echo $this->env->getExtension('translator')->getTranslator()->trans("Sunday", array(), "BinovoElkarBackup");
        // line 135
        echo "                                </label>
                            </fieldset>
                            <fieldset>
                                <legend class=\"panel-legend\">";
        // line 138
        echo $this->env->getExtension('translator')->getTranslator()->trans("Retention policy", array(), "BinovoElkarBackup");
        echo "</legend>
                                ";
        // line 139
        echo $this->env->getExtension('translator')->getTranslator()->trans("Number of copies to keep", array(), "BinovoElkarBackup");
        echo "<br>
                                <input data-dojo-type=\"dijit/form/NumberSpinner\"
                                       value=\"0\"
                                       data-dojo-props=\"id: 'dailyCount', intermediateChanges: true, smallDelta: 1, constraints: {min:0,places:0}, style: 'width: 100px'\" />
                            </fieldset>
                        </div>

                        <div id=\"weekly-panel\" data-dojo-type=\"dijit/layout/ContentPane\" title=\"";
        // line 146
        echo $this->env->getExtension('translator')->getTranslator()->trans("Weekly", array(), "BinovoElkarBackup");
        echo "\">
                            <label class=\"checkbox\">
                                <input type=\"checkbox\" class=\"activation-controller\" id=\"weekly-activation\" /> ";
        // line 148
        echo $this->env->getExtension('translator')->getTranslator()->trans("Make weekly backups", array(), "BinovoElkarBackup");
        // line 149
        echo "                            </label>
                            <fieldset>
                                <legend class=\"panel-legend\">";
        // line 151
        echo $this->env->getExtension('translator')->getTranslator()->trans("Time of day", array(), "BinovoElkarBackup");
        echo "</legend>
                                <input id=\"weeklyHour\"
                                       data-dojo-type=\"dijit/form/TimeTextBox\"
                                       data-dojo-props=\"constraints:{timePattern: 'HH:mm', clickableIncrement: 'T00:15:00',visibleIncrement: 'T00:15:00', visibleRange: 'T01:00:00'}, value: '09:00'\" />
                            </fieldset>
                            <fieldset>
                                <legend class=\"panel-legend\">";
        // line 157
        echo $this->env->getExtension('translator')->getTranslator()->trans("Day of week", array(), "BinovoElkarBackup");
        echo "</legend>
                                <label class=\"radio\">
                                    <input name=\"weekly-day\" id=\"weekly-monday\" type=\"radio\" /> ";
        // line 159
        echo $this->env->getExtension('translator')->getTranslator()->trans("Monday", array(), "BinovoElkarBackup");
        // line 160
        echo "                                </label>
                                <label class=\"radio\">
                                    <input name=\"weekly-day\" id=\"weekly-tuesday\" type=\"radio\" /> ";
        // line 162
        echo $this->env->getExtension('translator')->getTranslator()->trans("Tuesday", array(), "BinovoElkarBackup");
        // line 163
        echo "                                </label>
                                <label class=\"radio\">
                                    <input name=\"weekly-day\" id=\"weekly-wednesday\" type=\"radio\" /> ";
        // line 165
        echo $this->env->getExtension('translator')->getTranslator()->trans("Wednesday", array(), "BinovoElkarBackup");
        // line 166
        echo "                                </label>
                                <label class=\"radio\">
                                    <input name=\"weekly-day\" id=\"weekly-thursday\" type=\"radio\" /> ";
        // line 168
        echo $this->env->getExtension('translator')->getTranslator()->trans("Thursday", array(), "BinovoElkarBackup");
        // line 169
        echo "                                </label>
                                <label class=\"radio\">
                                    <input name=\"weekly-day\" id=\"weekly-friday\" type=\"radio\" /> ";
        // line 171
        echo $this->env->getExtension('translator')->getTranslator()->trans("Friday", array(), "BinovoElkarBackup");
        // line 172
        echo "                                </label>
                                <label class=\"radio\">
                                    <input name=\"weekly-day\" id=\"weekly-saturday\" type=\"radio\" /> ";
        // line 174
        echo $this->env->getExtension('translator')->getTranslator()->trans("Saturday", array(), "BinovoElkarBackup");
        // line 175
        echo "                                </label>
                                <label class=\"radio\">
                                    <input name=\"weekly-day\" id=\"weekly-sunday\" type=\"radio\" /> ";
        // line 177
        echo $this->env->getExtension('translator')->getTranslator()->trans("Sunday", array(), "BinovoElkarBackup");
        // line 178
        echo "                                </label>
                            </fieldset>
                            <fieldset>
                                <legend class=\"panel-legend\">";
        // line 181
        echo $this->env->getExtension('translator')->getTranslator()->trans("Retention policy", array(), "BinovoElkarBackup");
        echo "</legend>
                                ";
        // line 182
        echo $this->env->getExtension('translator')->getTranslator()->trans("Number of copies to keep", array(), "BinovoElkarBackup");
        echo "<br>
                                <input id=\"weeklyCount\"
                                       data-dojo-type=\"dijit/form/NumberSpinner\"
                                       data-dojo-props=\"id: 'weeklyCount', intermediateChanges: true, smallDelta: 1, constraints: {min:0,places:0}, style: 'width: 100px'\" />
                            </fieldset>
                        </div>

                        <div id=\"monthly-panel\" data-dojo-type=\"dijit/layout/ContentPane\" title=\"";
        // line 189
        echo $this->env->getExtension('translator')->getTranslator()->trans("Monthly", array(), "BinovoElkarBackup");
        echo "\">
                            <label class=\"checkbox\">
                                <input type=\"checkbox\" class=\"activation-controller\" id=\"monthly-activation\" /> ";
        // line 191
        echo $this->env->getExtension('translator')->getTranslator()->trans("Make monthly backups", array(), "BinovoElkarBackup");
        // line 192
        echo "                            </label>
                            <fieldset>
                                <legend class=\"panel-legend\">";
        // line 194
        echo $this->env->getExtension('translator')->getTranslator()->trans("Time of day", array(), "BinovoElkarBackup");
        echo "</legend>
                                <input id=\"monthlyHour\"
                                       data-dojo-type=\"dijit/form/TimeTextBox\"
                                       data-dojo-props=\"constraints:{timePattern: 'HH:mm', clickableIncrement: 'T00:15:00',visibleIncrement: 'T00:15:00', visibleRange: 'T01:00:00'}, value: '09:00'\" />
                            </fieldset>
                            <fieldset>
                                <legend class=\"panel-legend\">";
        // line 200
        echo $this->env->getExtension('translator')->getTranslator()->trans("Day of month", array(), "BinovoElkarBackup");
        echo "</legend>
                                <input id=\"dayOfMonth\"
                                       data-dojo-type=\"dijit/form/NumberSpinner\"
                                       data-dojo-props=\"id: 'dayOfMonth', intermediateChanges: true, smallDelta: 1, constraints: {min:1,max:31,places:0}, style: 'width: 100px'\" />
                            </fieldset>
                            <fieldset>
                                <legend class=\"panel-legend\">";
        // line 206
        echo $this->env->getExtension('translator')->getTranslator()->trans("Retention policy", array(), "BinovoElkarBackup");
        echo "</legend>
                                ";
        // line 207
        echo $this->env->getExtension('translator')->getTranslator()->trans("Number of copies to keep", array(), "BinovoElkarBackup");
        echo "<br>
                                <input id=\"monthlyCount\"
                                       data-dojo-type=\"dijit/form/NumberSpinner\"
                                       data-dojo-props=\"id: 'monthlyCount', intermediateChanges: true, smallDelta: 1, constraints: {min:0,places:0}, style: 'width: 100px'\" />
                            </fieldset>
                        </div>

                        <div id=\"yearly-panel\" data-dojo-type=\"dijit/layout/ContentPane\" title=\"";
        // line 214
        echo $this->env->getExtension('translator')->getTranslator()->trans("Yearly", array(), "BinovoElkarBackup");
        echo "\">
                            <label class=\"checkbox\">
                                <input type=\"checkbox\" class=\"activation-controller\" id=\"yearly-activation\" /> ";
        // line 216
        echo $this->env->getExtension('translator')->getTranslator()->trans("Make yearly backups", array(), "BinovoElkarBackup");
        // line 217
        echo "                            </label>
                            <fieldset>
                                <legend class=\"panel-legend\">";
        // line 219
        echo $this->env->getExtension('translator')->getTranslator()->trans("Time of day", array(), "BinovoElkarBackup");
        echo "</legend>
                                <input id=\"yearlyHour\"
                                       data-dojo-type=\"dijit/form/TimeTextBox\"
                                       data-dojo-props=\"constraints:{timePattern: 'HH:mm', clickableIncrement: 'T00:15:00',visibleIncrement: 'T00:15:00', visibleRange: 'T01:00:00'}, value: '09:00'\" />
                            </fieldset>
                            <fieldset>
                                <legend class=\"panel-legend\">";
        // line 225
        echo $this->env->getExtension('translator')->getTranslator()->trans("Day of year:", array(), "BinovoElkarBackup");
        echo "</legend>
                                <input id=\"dayOfYear\"
                                       data-dojo-type=\"dijit/form/DateTextBox\"
                                       data-dojo-props=\"style:'width: 100px'\"
                                       />
                            </fieldset>
                            <fieldset>
                                <legend class=\"panel-legend\">";
        // line 232
        echo $this->env->getExtension('translator')->getTranslator()->trans("Retention policy", array(), "BinovoElkarBackup");
        echo "</legend>
                                ";
        // line 233
        echo $this->env->getExtension('translator')->getTranslator()->trans("Number of copies to keep", array(), "BinovoElkarBackup");
        echo "<br>
                                <input id=\"yearlyCount\"
                                       data-dojo-type=\"dijit/form/NumberSpinner\"
                                       data-dojo-props=\"id: 'yearlyCount', intermediateChanges: true, smallDelta: 1, constraints: {min:0,places:0}, style: 'width: 100px'\" />
                            </fieldset>
                        </div>
                    </div>
                </div>
                <div class=\"control-group\" style=\"padding-top: 20px;\">
                    <div class=\"controls\">
                        <input class=\"btn btn-default pull-right\" type=\"submit\" value=\"";
        // line 243
        echo $this->env->getExtension('translator')->getTranslator()->trans("Save", array(), "BinovoElkarBackup");
        echo "\"/>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6\">
                ";
        // line 248
        echo $this->env->getExtension('translator')->getTranslator()->trans("policy_help", array(), "BinovoElkarBackup");
        // line 249
        echo "            </div>
        </div>
    </fieldset>
</form>
";
    }

    public function getTemplateName()
    {
        return "BinovoElkarBackupBundle:Default:policy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  491 => 249,  489 => 248,  481 => 243,  468 => 233,  464 => 232,  454 => 225,  445 => 219,  441 => 217,  439 => 216,  434 => 214,  424 => 207,  420 => 206,  411 => 200,  402 => 194,  398 => 192,  396 => 191,  391 => 189,  381 => 182,  377 => 181,  372 => 178,  370 => 177,  366 => 175,  364 => 174,  360 => 172,  358 => 171,  354 => 169,  352 => 168,  348 => 166,  346 => 165,  342 => 163,  340 => 162,  336 => 160,  334 => 159,  329 => 157,  320 => 151,  316 => 149,  314 => 148,  309 => 146,  299 => 139,  295 => 138,  290 => 135,  288 => 134,  284 => 132,  282 => 131,  278 => 129,  276 => 128,  272 => 126,  270 => 125,  266 => 123,  264 => 122,  260 => 120,  258 => 119,  254 => 117,  252 => 116,  247 => 114,  240 => 110,  236 => 108,  234 => 107,  229 => 105,  219 => 98,  215 => 97,  210 => 94,  208 => 93,  204 => 91,  202 => 90,  198 => 88,  196 => 87,  192 => 85,  190 => 84,  186 => 82,  184 => 81,  180 => 79,  178 => 78,  174 => 76,  172 => 75,  167 => 73,  162 => 70,  160 => 69,  156 => 67,  154 => 66,  149 => 64,  145 => 62,  143 => 61,  138 => 59,  131 => 55,  126 => 52,  124 => 51,  120 => 49,  118 => 48,  114 => 46,  112 => 45,  108 => 43,  106 => 42,  102 => 40,  100 => 39,  96 => 37,  94 => 36,  88 => 32,  86 => 31,  80 => 28,  73 => 26,  70 => 25,  67 => 24,  55 => 14,  41 => 12,  37 => 11,  32 => 10,  29 => 9,  11 => 6,);
    }
}
/* {##*/
/*  # @copyright 2012,2013 Binovo it Human Project, S.L.*/
/*  # @license http://www.opensource.org/licenses/bsd-license.php New-BSD*/
/*  #}*/
/* */
/* {% extends 'BinovoElkarBackupBundle:Default:base.html.twig' %}*/
/* {% trans_default_domain 'BinovoElkarBackup' %}*/
/* */
/* {% block scripts %}*/
/*     {{ parent() }}*/
/*     {% javascripts '@BinovoElkarBackupBundle/Resources/public/js/edit-policy.js' %}*/
/*         <script type="text/javascript" src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/* <style>*/
/* .dijitTabContainerNoLayout {*/
/* width:auto;*/
/* }*/
/* legend.panel-legend {*/
/* font-size: 14px;*/
/* }*/
/* </style>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* <form id="form" class="form-horizontal" action="{{ path('savePolicy', {id: form.vars.value.id}) }}" method="post" {{ form_enctype(form) }}>*/
/*     <fieldset>*/
/*         <h3>{% trans %}Edit policy{% endtrans %}</h3>*/
/*         <div class="row">*/
/*             <div class="col-md-6">*/
/*                 {% form_theme form 'BinovoElkarBackupBundle:Default:fields.html.twig' %}*/
/*                 <div>*/
/*                     <div class="control-group">*/
/*                         <div id="errorMessage" class="controls help-block">*/
/*                             <div id="hourlyCountMsg" class="hide alert alert-danger">*/
/*                                 {% trans %}Hourly backups activated, hourly count can not be 0{% endtrans %}*/
/*                             </div>*/
/*                             <div id="dailyCountMsg" class="hide alert alert-danger">*/
/*                                 {% trans %}Daily backups activated, daily count can not be 0{% endtrans %}*/
/*                             </div>*/
/*                             <div id="weeklyCountMsg" class="hide alert alert-danger">*/
/*                                 {% trans %}Weekly backups activated, weekly count can not be 0{% endtrans %}*/
/*                             </div>*/
/*                             <div id="monthlyCountMsg" class="hide alert alert-danger">*/
/*                                 {% trans %}Monthly backups activated, monthly count can not be 0{% endtrans %}*/
/*                             </div>*/
/*                             <div id="yearlyCountMsg" class="hide alert alert-danger">*/
/*                             {% trans %}Yearly backups activated, yearly count can not be 0{% endtrans %}*/
/*                             </div>*/
/*                             <div id="rotationMsg" class="hide alert alert-danger">*/
/*                                 {% trans %}Can not have the retention count of the first backup level set to 1, and have a second backup level{% endtrans %}*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     {{ form_widget(form) }}*/
/*                 </div>*/
/*                 <div class="control-group">*/
/*                     <div data-dojo-type="dijit/layout/TabContainer" style="height: 100%;" data-dojo-props="doLayout:false" class="controls">*/
/*                         <div id="duringTheDay-panel" data-dojo-type="dijit/layout/ContentPane" title="{% trans %}During the day{% endtrans %}">*/
/*                             <label class="checkbox">*/
/*                                 <input type="checkbox" class="activation-controller" id="duringTheDay-activation" /> {% trans %}Make backups during the day{% endtrans %}*/
/*                             </label>*/
/*                             <fieldset  id="hourlyHours">*/
/*                                 <legend class="panel-legend">{% trans %}Time of day{% endtrans %}</legend>*/
/*                                 <div data-dojo-type="dijit/Tooltip" data-dojo-props="connectId:'hourlyCount'">*/
/*                                     {% trans %}The number of copies to make during the day{% endtrans %}*/
/*                                 </div>*/
/*                                 <button type="button" class="btn btn-default btn-sm" id="hourlyHoursAdd">*/
/*                                   <span class="glyphicon-plus"> {% trans %}Add{% endtrans %}*/
/*                                 </button>*/
/*                             </fieldset>*/
/*                             <fieldset>*/
/*                                 <legend class="panel-legend">{% trans %}Days of the week{% endtrans %}</legend>*/
/*                                 <label class="checkbox">*/
/*                                     <input id="hourly-monday" type="checkbox" /> {% trans %}Monday{% endtrans %}*/
/*                                 </label>*/
/*                                 <label class="checkbox">*/
/*                                     <input id="hourly-tuesday" type="checkbox" /> {% trans %}Tuesday{% endtrans %}*/
/*                                 </label>*/
/*                                 <label class="checkbox">*/
/*                                     <input id="hourly-wednesday" type="checkbox" /> {% trans %}Wednesday{% endtrans %}*/
/*                                 </label>*/
/*                                 <label class="checkbox">*/
/*                                     <input id="hourly-thursday" type="checkbox" /> {% trans %}Thursday{% endtrans %}*/
/*                                 </label>*/
/*                                 <label class="checkbox">*/
/*                                     <input id="hourly-friday" type="checkbox" /> {% trans %}Friday{% endtrans %}*/
/*                                 </label>*/
/*                                 <label class="checkbox">*/
/*                                     <input id="hourly-saturday" type="checkbox" /> {% trans %}Saturday{% endtrans %}*/
/*                                 </label>*/
/*                                 <label class="checkbox">*/
/*                                     <input id="hourly-sunday" type="checkbox" /> {% trans %}Sunday{% endtrans %}*/
/*                                 </label>*/
/*                             </fieldset>*/
/*                             <fieldset>*/
/*                                 <legend class="panel-legend">{% trans %}Retention policy{% endtrans %}</legend>*/
/*                                 {% trans %}Number of copies to keep{% endtrans %}<br>*/
/*                                 <input data-dojo-type="dijit/form/NumberSpinner"*/
/*                                        value="0"*/
/*                                        data-dojo-props="id: 'hourlyCount', intermediateChanges: true, smallDelta: 1, constraints: {min:0,places:0}, style: 'width: 100px'" />*/
/*                             </fieldset>*/
/*                         </div>*/
/* */
/*                         <div id="daily-panel" data-dojo-type="dijit/layout/ContentPane" title="{% trans %}Daily{% endtrans %}">*/
/*                             <label class="checkbox">*/
/*                                 <input type="checkbox" class="activation-controller" id="daily-activation" /> {% trans %}Make daily backups{% endtrans %}*/
/*                             </label>*/
/*                             <fieldset>*/
/*                                 <legend class="panel-legend">{% trans %}Time of day{% endtrans %}</legend>*/
/*                                 <input id="dailyHour" data-dojo-type="dijit/form/TimeTextBox" data-dojo-props="constraints:{timePattern: 'HH:mm', clickableIncrement: 'T00:15:00',visibleIncrement: 'T00:15:00', visibleRange: 'T01:00:00'}, value: '09:00'" />*/
/*                             </fieldset>*/
/*                             <fieldset>*/
/*                                 <legend class="panel-legend">{% trans %}Days of the week{% endtrans %}</legend>*/
/*                                 <label class="checkbox">*/
/*                                     <input id="daily-monday" type="checkbox" /> {% trans %}Monday{% endtrans %}*/
/*                                 </label>*/
/*                                 <label class="checkbox">*/
/*                                     <input id="daily-tuesday" type="checkbox" /> {% trans %}Tuesday{% endtrans %}*/
/*                                 </label>*/
/*                                 <label class="checkbox">*/
/*                                     <input id="daily-wednesday" type="checkbox" /> {% trans %}Wednesday{% endtrans %}*/
/*                                 </label>*/
/*                                 <label class="checkbox">*/
/*                                     <input id="daily-thursday" type="checkbox" /> {% trans %}Thursday{% endtrans %}*/
/*                                 </label>*/
/*                                 <label class="checkbox">*/
/*                                     <input id="daily-friday" type="checkbox" /> {% trans %}Friday{% endtrans %}*/
/*                                 </label>*/
/*                                 <label class="checkbox">*/
/*                                     <input id="daily-saturday" type="checkbox" /> {% trans %}Saturday{% endtrans %}*/
/*                                 </label>*/
/*                                 <label class="checkbox">*/
/*                                     <input id="daily-sunday" type="checkbox" /> {% trans %}Sunday{% endtrans %}*/
/*                                 </label>*/
/*                             </fieldset>*/
/*                             <fieldset>*/
/*                                 <legend class="panel-legend">{% trans %}Retention policy{% endtrans %}</legend>*/
/*                                 {% trans %}Number of copies to keep{% endtrans %}<br>*/
/*                                 <input data-dojo-type="dijit/form/NumberSpinner"*/
/*                                        value="0"*/
/*                                        data-dojo-props="id: 'dailyCount', intermediateChanges: true, smallDelta: 1, constraints: {min:0,places:0}, style: 'width: 100px'" />*/
/*                             </fieldset>*/
/*                         </div>*/
/* */
/*                         <div id="weekly-panel" data-dojo-type="dijit/layout/ContentPane" title="{% trans %}Weekly{% endtrans %}">*/
/*                             <label class="checkbox">*/
/*                                 <input type="checkbox" class="activation-controller" id="weekly-activation" /> {% trans %}Make weekly backups{% endtrans %}*/
/*                             </label>*/
/*                             <fieldset>*/
/*                                 <legend class="panel-legend">{% trans %}Time of day{% endtrans %}</legend>*/
/*                                 <input id="weeklyHour"*/
/*                                        data-dojo-type="dijit/form/TimeTextBox"*/
/*                                        data-dojo-props="constraints:{timePattern: 'HH:mm', clickableIncrement: 'T00:15:00',visibleIncrement: 'T00:15:00', visibleRange: 'T01:00:00'}, value: '09:00'" />*/
/*                             </fieldset>*/
/*                             <fieldset>*/
/*                                 <legend class="panel-legend">{% trans %}Day of week{% endtrans %}</legend>*/
/*                                 <label class="radio">*/
/*                                     <input name="weekly-day" id="weekly-monday" type="radio" /> {% trans %}Monday{% endtrans %}*/
/*                                 </label>*/
/*                                 <label class="radio">*/
/*                                     <input name="weekly-day" id="weekly-tuesday" type="radio" /> {% trans %}Tuesday{% endtrans %}*/
/*                                 </label>*/
/*                                 <label class="radio">*/
/*                                     <input name="weekly-day" id="weekly-wednesday" type="radio" /> {% trans %}Wednesday{% endtrans %}*/
/*                                 </label>*/
/*                                 <label class="radio">*/
/*                                     <input name="weekly-day" id="weekly-thursday" type="radio" /> {% trans %}Thursday{% endtrans %}*/
/*                                 </label>*/
/*                                 <label class="radio">*/
/*                                     <input name="weekly-day" id="weekly-friday" type="radio" /> {% trans %}Friday{% endtrans %}*/
/*                                 </label>*/
/*                                 <label class="radio">*/
/*                                     <input name="weekly-day" id="weekly-saturday" type="radio" /> {% trans %}Saturday{% endtrans %}*/
/*                                 </label>*/
/*                                 <label class="radio">*/
/*                                     <input name="weekly-day" id="weekly-sunday" type="radio" /> {% trans %}Sunday{% endtrans %}*/
/*                                 </label>*/
/*                             </fieldset>*/
/*                             <fieldset>*/
/*                                 <legend class="panel-legend">{% trans %}Retention policy{% endtrans %}</legend>*/
/*                                 {% trans %}Number of copies to keep{% endtrans %}<br>*/
/*                                 <input id="weeklyCount"*/
/*                                        data-dojo-type="dijit/form/NumberSpinner"*/
/*                                        data-dojo-props="id: 'weeklyCount', intermediateChanges: true, smallDelta: 1, constraints: {min:0,places:0}, style: 'width: 100px'" />*/
/*                             </fieldset>*/
/*                         </div>*/
/* */
/*                         <div id="monthly-panel" data-dojo-type="dijit/layout/ContentPane" title="{% trans %}Monthly{% endtrans %}">*/
/*                             <label class="checkbox">*/
/*                                 <input type="checkbox" class="activation-controller" id="monthly-activation" /> {% trans %}Make monthly backups{% endtrans %}*/
/*                             </label>*/
/*                             <fieldset>*/
/*                                 <legend class="panel-legend">{% trans %}Time of day{% endtrans %}</legend>*/
/*                                 <input id="monthlyHour"*/
/*                                        data-dojo-type="dijit/form/TimeTextBox"*/
/*                                        data-dojo-props="constraints:{timePattern: 'HH:mm', clickableIncrement: 'T00:15:00',visibleIncrement: 'T00:15:00', visibleRange: 'T01:00:00'}, value: '09:00'" />*/
/*                             </fieldset>*/
/*                             <fieldset>*/
/*                                 <legend class="panel-legend">{% trans %}Day of month{% endtrans %}</legend>*/
/*                                 <input id="dayOfMonth"*/
/*                                        data-dojo-type="dijit/form/NumberSpinner"*/
/*                                        data-dojo-props="id: 'dayOfMonth', intermediateChanges: true, smallDelta: 1, constraints: {min:1,max:31,places:0}, style: 'width: 100px'" />*/
/*                             </fieldset>*/
/*                             <fieldset>*/
/*                                 <legend class="panel-legend">{% trans %}Retention policy{% endtrans %}</legend>*/
/*                                 {% trans %}Number of copies to keep{% endtrans %}<br>*/
/*                                 <input id="monthlyCount"*/
/*                                        data-dojo-type="dijit/form/NumberSpinner"*/
/*                                        data-dojo-props="id: 'monthlyCount', intermediateChanges: true, smallDelta: 1, constraints: {min:0,places:0}, style: 'width: 100px'" />*/
/*                             </fieldset>*/
/*                         </div>*/
/* */
/*                         <div id="yearly-panel" data-dojo-type="dijit/layout/ContentPane" title="{% trans %}Yearly{% endtrans %}">*/
/*                             <label class="checkbox">*/
/*                                 <input type="checkbox" class="activation-controller" id="yearly-activation" /> {% trans %}Make yearly backups{% endtrans %}*/
/*                             </label>*/
/*                             <fieldset>*/
/*                                 <legend class="panel-legend">{% trans %}Time of day{% endtrans %}</legend>*/
/*                                 <input id="yearlyHour"*/
/*                                        data-dojo-type="dijit/form/TimeTextBox"*/
/*                                        data-dojo-props="constraints:{timePattern: 'HH:mm', clickableIncrement: 'T00:15:00',visibleIncrement: 'T00:15:00', visibleRange: 'T01:00:00'}, value: '09:00'" />*/
/*                             </fieldset>*/
/*                             <fieldset>*/
/*                                 <legend class="panel-legend">{% trans %}Day of year:{% endtrans %}</legend>*/
/*                                 <input id="dayOfYear"*/
/*                                        data-dojo-type="dijit/form/DateTextBox"*/
/*                                        data-dojo-props="style:'width: 100px'"*/
/*                                        />*/
/*                             </fieldset>*/
/*                             <fieldset>*/
/*                                 <legend class="panel-legend">{% trans %}Retention policy{% endtrans %}</legend>*/
/*                                 {% trans %}Number of copies to keep{% endtrans %}<br>*/
/*                                 <input id="yearlyCount"*/
/*                                        data-dojo-type="dijit/form/NumberSpinner"*/
/*                                        data-dojo-props="id: 'yearlyCount', intermediateChanges: true, smallDelta: 1, constraints: {min:0,places:0}, style: 'width: 100px'" />*/
/*                             </fieldset>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="control-group" style="padding-top: 20px;">*/
/*                     <div class="controls">*/
/*                         <input class="btn btn-default pull-right" type="submit" value="{% trans %}Save{% endtrans %}"/>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-md-6">*/
/*                 {% trans %}policy_help{% endtrans %}*/
/*             </div>*/
/*         </div>*/
/*     </fieldset>*/
/* </form>*/
/* {% endblock %}*/
/* */
