<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_165f3744fdb2b14823a83419f62990e40437d77de85ee0cde4b7b293e263ff34 extends Twig_Template
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
        $__internal_b441080d89a862b65ef7c37b33c162ced519ea10cc92b2cd5de2c1172eee9a78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b441080d89a862b65ef7c37b33c162ced519ea10cc92b2cd5de2c1172eee9a78->enter($__internal_b441080d89a862b65ef7c37b33c162ced519ea10cc92b2cd5de2c1172eee9a78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_5f30d632067d51ef82ccb857e4942236f288238450f4cdf051bb437842481718 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f30d632067d51ef82ccb857e4942236f288238450f4cdf051bb437842481718->enter($__internal_5f30d632067d51ef82ccb857e4942236f288238450f4cdf051bb437842481718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_b441080d89a862b65ef7c37b33c162ced519ea10cc92b2cd5de2c1172eee9a78->leave($__internal_b441080d89a862b65ef7c37b33c162ced519ea10cc92b2cd5de2c1172eee9a78_prof);

        
        $__internal_5f30d632067d51ef82ccb857e4942236f288238450f4cdf051bb437842481718->leave($__internal_5f30d632067d51ef82ccb857e4942236f288238450f4cdf051bb437842481718_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
