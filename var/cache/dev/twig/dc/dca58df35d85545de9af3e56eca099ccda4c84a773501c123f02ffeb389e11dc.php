<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_5a9333badc484bd217e3a06d41ff5df228e73382f960a32beca2eed80ba85e81 extends Twig_Template
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
        $__internal_e4bcd5b103b2ef8ff44a08b0350ea95c79943381e6a1aed224d1c753e6bbdaaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4bcd5b103b2ef8ff44a08b0350ea95c79943381e6a1aed224d1c753e6bbdaaa->enter($__internal_e4bcd5b103b2ef8ff44a08b0350ea95c79943381e6a1aed224d1c753e6bbdaaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_ad5d3a3e4839459a8780d5efe61de27164f7812c086749e3091b77ab8a9e8606 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad5d3a3e4839459a8780d5efe61de27164f7812c086749e3091b77ab8a9e8606->enter($__internal_ad5d3a3e4839459a8780d5efe61de27164f7812c086749e3091b77ab8a9e8606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_e4bcd5b103b2ef8ff44a08b0350ea95c79943381e6a1aed224d1c753e6bbdaaa->leave($__internal_e4bcd5b103b2ef8ff44a08b0350ea95c79943381e6a1aed224d1c753e6bbdaaa_prof);

        
        $__internal_ad5d3a3e4839459a8780d5efe61de27164f7812c086749e3091b77ab8a9e8606->leave($__internal_ad5d3a3e4839459a8780d5efe61de27164f7812c086749e3091b77ab8a9e8606_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}
