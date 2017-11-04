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
        $__internal_49dbd3093918f4f478ddc1f90501dd9c61e028b4ec197bd4a576bdd51b61b1c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49dbd3093918f4f478ddc1f90501dd9c61e028b4ec197bd4a576bdd51b61b1c4->enter($__internal_49dbd3093918f4f478ddc1f90501dd9c61e028b4ec197bd4a576bdd51b61b1c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_95255e8998435e67870d7f7077dfdbfb3f4813427d810575d45ef284ab240c54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95255e8998435e67870d7f7077dfdbfb3f4813427d810575d45ef284ab240c54->enter($__internal_95255e8998435e67870d7f7077dfdbfb3f4813427d810575d45ef284ab240c54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_49dbd3093918f4f478ddc1f90501dd9c61e028b4ec197bd4a576bdd51b61b1c4->leave($__internal_49dbd3093918f4f478ddc1f90501dd9c61e028b4ec197bd4a576bdd51b61b1c4_prof);

        
        $__internal_95255e8998435e67870d7f7077dfdbfb3f4813427d810575d45ef284ab240c54->leave($__internal_95255e8998435e67870d7f7077dfdbfb3f4813427d810575d45ef284ab240c54_prof);

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
