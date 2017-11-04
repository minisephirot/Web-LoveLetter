<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_58012c3dc7a5560e8553a854aa2eea0deaab9bc108adf38b98c9f74b14727bad extends Twig_Template
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
        $__internal_28a72226934c2b183a75935b3666e4626cddb3a8808a8486d2f6db671fd44404 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28a72226934c2b183a75935b3666e4626cddb3a8808a8486d2f6db671fd44404->enter($__internal_28a72226934c2b183a75935b3666e4626cddb3a8808a8486d2f6db671fd44404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_1f195e0045e60fd7fa83dc75ab7c7606773ee33c1372e189fb4010fc42a3ad13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f195e0045e60fd7fa83dc75ab7c7606773ee33c1372e189fb4010fc42a3ad13->enter($__internal_1f195e0045e60fd7fa83dc75ab7c7606773ee33c1372e189fb4010fc42a3ad13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_28a72226934c2b183a75935b3666e4626cddb3a8808a8486d2f6db671fd44404->leave($__internal_28a72226934c2b183a75935b3666e4626cddb3a8808a8486d2f6db671fd44404_prof);

        
        $__internal_1f195e0045e60fd7fa83dc75ab7c7606773ee33c1372e189fb4010fc42a3ad13->leave($__internal_1f195e0045e60fd7fa83dc75ab7c7606773ee33c1372e189fb4010fc42a3ad13_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
