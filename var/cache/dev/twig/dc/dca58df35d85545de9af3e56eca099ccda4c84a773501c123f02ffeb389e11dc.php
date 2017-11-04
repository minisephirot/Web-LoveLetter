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
        $__internal_9ef79aa46c8e2e7fab51f4751090502c31918c0ac45722cdf73b6e6225e69f27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ef79aa46c8e2e7fab51f4751090502c31918c0ac45722cdf73b6e6225e69f27->enter($__internal_9ef79aa46c8e2e7fab51f4751090502c31918c0ac45722cdf73b6e6225e69f27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_0e2a699a6735a60fa6b75f154dcc0e867903e99f128b52dc24a04ec1a86e096b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e2a699a6735a60fa6b75f154dcc0e867903e99f128b52dc24a04ec1a86e096b->enter($__internal_0e2a699a6735a60fa6b75f154dcc0e867903e99f128b52dc24a04ec1a86e096b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_9ef79aa46c8e2e7fab51f4751090502c31918c0ac45722cdf73b6e6225e69f27->leave($__internal_9ef79aa46c8e2e7fab51f4751090502c31918c0ac45722cdf73b6e6225e69f27_prof);

        
        $__internal_0e2a699a6735a60fa6b75f154dcc0e867903e99f128b52dc24a04ec1a86e096b->leave($__internal_0e2a699a6735a60fa6b75f154dcc0e867903e99f128b52dc24a04ec1a86e096b_prof);

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
