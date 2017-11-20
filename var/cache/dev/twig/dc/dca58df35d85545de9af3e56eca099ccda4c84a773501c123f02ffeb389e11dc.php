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
        $__internal_f72ce25aec6a77bf37cf0c54133ed5e2c75cd8f309453cf3f00aa25891a5f7e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f72ce25aec6a77bf37cf0c54133ed5e2c75cd8f309453cf3f00aa25891a5f7e9->enter($__internal_f72ce25aec6a77bf37cf0c54133ed5e2c75cd8f309453cf3f00aa25891a5f7e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_14041d0ae65d0e931f92e5282446b3e9bb38f10f93fc34639d5774599d556b65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14041d0ae65d0e931f92e5282446b3e9bb38f10f93fc34639d5774599d556b65->enter($__internal_14041d0ae65d0e931f92e5282446b3e9bb38f10f93fc34639d5774599d556b65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_f72ce25aec6a77bf37cf0c54133ed5e2c75cd8f309453cf3f00aa25891a5f7e9->leave($__internal_f72ce25aec6a77bf37cf0c54133ed5e2c75cd8f309453cf3f00aa25891a5f7e9_prof);

        
        $__internal_14041d0ae65d0e931f92e5282446b3e9bb38f10f93fc34639d5774599d556b65->leave($__internal_14041d0ae65d0e931f92e5282446b3e9bb38f10f93fc34639d5774599d556b65_prof);

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
