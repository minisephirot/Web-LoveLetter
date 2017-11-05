<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_6cfdd71e94444c899edef362485c9beedc392f4f3ee66b627195df79810d6cfc extends Twig_Template
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
        $__internal_53f5b980b5dd8bdb3e7e2dc8af90a30fb2a9f61ad77808a9ccdfd5b225c593c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53f5b980b5dd8bdb3e7e2dc8af90a30fb2a9f61ad77808a9ccdfd5b225c593c9->enter($__internal_53f5b980b5dd8bdb3e7e2dc8af90a30fb2a9f61ad77808a9ccdfd5b225c593c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_f128170038a7308fca5838a30a296c8e0740de00d904f7388cf2234e4bb173e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f128170038a7308fca5838a30a296c8e0740de00d904f7388cf2234e4bb173e9->enter($__internal_f128170038a7308fca5838a30a296c8e0740de00d904f7388cf2234e4bb173e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_53f5b980b5dd8bdb3e7e2dc8af90a30fb2a9f61ad77808a9ccdfd5b225c593c9->leave($__internal_53f5b980b5dd8bdb3e7e2dc8af90a30fb2a9f61ad77808a9ccdfd5b225c593c9_prof);

        
        $__internal_f128170038a7308fca5838a30a296c8e0740de00d904f7388cf2234e4bb173e9->leave($__internal_f128170038a7308fca5838a30a296c8e0740de00d904f7388cf2234e4bb173e9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
