<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_bf67e48e3ab610965e018081e238ecefc00cad9a8e31ad1ce7d5d0f1e4ceceae extends Twig_Template
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
        $__internal_95879d10ae6840b1a8839448a0318f28a49f31285a120526552818fbbac28797 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95879d10ae6840b1a8839448a0318f28a49f31285a120526552818fbbac28797->enter($__internal_95879d10ae6840b1a8839448a0318f28a49f31285a120526552818fbbac28797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_d1839f7f61973845d1e04d95dbb18e8ae931a032b5b35790a0940d7518e15d87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1839f7f61973845d1e04d95dbb18e8ae931a032b5b35790a0940d7518e15d87->enter($__internal_d1839f7f61973845d1e04d95dbb18e8ae931a032b5b35790a0940d7518e15d87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_95879d10ae6840b1a8839448a0318f28a49f31285a120526552818fbbac28797->leave($__internal_95879d10ae6840b1a8839448a0318f28a49f31285a120526552818fbbac28797_prof);

        
        $__internal_d1839f7f61973845d1e04d95dbb18e8ae931a032b5b35790a0940d7518e15d87->leave($__internal_d1839f7f61973845d1e04d95dbb18e8ae931a032b5b35790a0940d7518e15d87_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_attributes.html.php");
    }
}
