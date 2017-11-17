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
        $__internal_75ad1d0f0be5918101494368f0f51eb16daaf21c012b0d2af1c9ef894e2e663e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75ad1d0f0be5918101494368f0f51eb16daaf21c012b0d2af1c9ef894e2e663e->enter($__internal_75ad1d0f0be5918101494368f0f51eb16daaf21c012b0d2af1c9ef894e2e663e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_4cd6f4c20a55fbcbb6535c634764524664a62297edfde9df00ba86228be64dad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cd6f4c20a55fbcbb6535c634764524664a62297edfde9df00ba86228be64dad->enter($__internal_4cd6f4c20a55fbcbb6535c634764524664a62297edfde9df00ba86228be64dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_75ad1d0f0be5918101494368f0f51eb16daaf21c012b0d2af1c9ef894e2e663e->leave($__internal_75ad1d0f0be5918101494368f0f51eb16daaf21c012b0d2af1c9ef894e2e663e_prof);

        
        $__internal_4cd6f4c20a55fbcbb6535c634764524664a62297edfde9df00ba86228be64dad->leave($__internal_4cd6f4c20a55fbcbb6535c634764524664a62297edfde9df00ba86228be64dad_prof);

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
