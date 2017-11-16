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
        $__internal_f4703a2efdd4ba119e5a1ce0231f7ec7b0eeb69502fbadfc9e6a4fdd8542a412 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4703a2efdd4ba119e5a1ce0231f7ec7b0eeb69502fbadfc9e6a4fdd8542a412->enter($__internal_f4703a2efdd4ba119e5a1ce0231f7ec7b0eeb69502fbadfc9e6a4fdd8542a412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_1a448a1ac300cbf4fdad3ccf2efe7059372826050591e07666462a4c4bee654d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a448a1ac300cbf4fdad3ccf2efe7059372826050591e07666462a4c4bee654d->enter($__internal_1a448a1ac300cbf4fdad3ccf2efe7059372826050591e07666462a4c4bee654d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_f4703a2efdd4ba119e5a1ce0231f7ec7b0eeb69502fbadfc9e6a4fdd8542a412->leave($__internal_f4703a2efdd4ba119e5a1ce0231f7ec7b0eeb69502fbadfc9e6a4fdd8542a412_prof);

        
        $__internal_1a448a1ac300cbf4fdad3ccf2efe7059372826050591e07666462a4c4bee654d->leave($__internal_1a448a1ac300cbf4fdad3ccf2efe7059372826050591e07666462a4c4bee654d_prof);

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
