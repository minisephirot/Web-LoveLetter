<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_233978913b15cdfd90e08a693d21ef9796983d6930712e3e9897ca93978349dc extends Twig_Template
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
        $__internal_35b5d25fbb43716b66efd1a1678ed0a857aa0e561caf349722dc00c3c6041ea6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35b5d25fbb43716b66efd1a1678ed0a857aa0e561caf349722dc00c3c6041ea6->enter($__internal_35b5d25fbb43716b66efd1a1678ed0a857aa0e561caf349722dc00c3c6041ea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_1a3e2594439c09f487caf8dc09a8ac79cac51a024af3ea0db7e5565835191280 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a3e2594439c09f487caf8dc09a8ac79cac51a024af3ea0db7e5565835191280->enter($__internal_1a3e2594439c09f487caf8dc09a8ac79cac51a024af3ea0db7e5565835191280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_35b5d25fbb43716b66efd1a1678ed0a857aa0e561caf349722dc00c3c6041ea6->leave($__internal_35b5d25fbb43716b66efd1a1678ed0a857aa0e561caf349722dc00c3c6041ea6_prof);

        
        $__internal_1a3e2594439c09f487caf8dc09a8ac79cac51a024af3ea0db7e5565835191280->leave($__internal_1a3e2594439c09f487caf8dc09a8ac79cac51a024af3ea0db7e5565835191280_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_attributes.html.php");
    }
}
