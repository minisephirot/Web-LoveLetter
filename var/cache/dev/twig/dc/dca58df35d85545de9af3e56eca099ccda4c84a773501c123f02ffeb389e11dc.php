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
        $__internal_7cff0bc597f3d1c9079464fdde1691b52bc98c11698a299c288dc8bb3ba3b4eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cff0bc597f3d1c9079464fdde1691b52bc98c11698a299c288dc8bb3ba3b4eb->enter($__internal_7cff0bc597f3d1c9079464fdde1691b52bc98c11698a299c288dc8bb3ba3b4eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_51b009702864a0fa0d274f4a1701166dc56685f4f480d984a91880ce8089d2e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51b009702864a0fa0d274f4a1701166dc56685f4f480d984a91880ce8089d2e5->enter($__internal_51b009702864a0fa0d274f4a1701166dc56685f4f480d984a91880ce8089d2e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_7cff0bc597f3d1c9079464fdde1691b52bc98c11698a299c288dc8bb3ba3b4eb->leave($__internal_7cff0bc597f3d1c9079464fdde1691b52bc98c11698a299c288dc8bb3ba3b4eb_prof);

        
        $__internal_51b009702864a0fa0d274f4a1701166dc56685f4f480d984a91880ce8089d2e5->leave($__internal_51b009702864a0fa0d274f4a1701166dc56685f4f480d984a91880ce8089d2e5_prof);

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
