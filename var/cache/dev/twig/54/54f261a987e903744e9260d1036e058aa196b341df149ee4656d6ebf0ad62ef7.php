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
        $__internal_9aca8bda92165c1a9e7d6f41495426fcfbdeb6a8571fd10e2fd10b1def017719 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9aca8bda92165c1a9e7d6f41495426fcfbdeb6a8571fd10e2fd10b1def017719->enter($__internal_9aca8bda92165c1a9e7d6f41495426fcfbdeb6a8571fd10e2fd10b1def017719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_2da1e34cbc983b0515017f130cbbc46f483056c6508b522df6eec6e85d5fff66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2da1e34cbc983b0515017f130cbbc46f483056c6508b522df6eec6e85d5fff66->enter($__internal_2da1e34cbc983b0515017f130cbbc46f483056c6508b522df6eec6e85d5fff66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_9aca8bda92165c1a9e7d6f41495426fcfbdeb6a8571fd10e2fd10b1def017719->leave($__internal_9aca8bda92165c1a9e7d6f41495426fcfbdeb6a8571fd10e2fd10b1def017719_prof);

        
        $__internal_2da1e34cbc983b0515017f130cbbc46f483056c6508b522df6eec6e85d5fff66->leave($__internal_2da1e34cbc983b0515017f130cbbc46f483056c6508b522df6eec6e85d5fff66_prof);

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
