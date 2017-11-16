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
        $__internal_822ee8d70734285402020a71d91ddb3ba61e45e0e8e4992a35dab7459a709dd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_822ee8d70734285402020a71d91ddb3ba61e45e0e8e4992a35dab7459a709dd9->enter($__internal_822ee8d70734285402020a71d91ddb3ba61e45e0e8e4992a35dab7459a709dd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_8b9091d6ff7e3c5da7459c7e26041a37eb40c2ac57a1ba59aa23eaa2f2ad8735 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b9091d6ff7e3c5da7459c7e26041a37eb40c2ac57a1ba59aa23eaa2f2ad8735->enter($__internal_8b9091d6ff7e3c5da7459c7e26041a37eb40c2ac57a1ba59aa23eaa2f2ad8735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_822ee8d70734285402020a71d91ddb3ba61e45e0e8e4992a35dab7459a709dd9->leave($__internal_822ee8d70734285402020a71d91ddb3ba61e45e0e8e4992a35dab7459a709dd9_prof);

        
        $__internal_8b9091d6ff7e3c5da7459c7e26041a37eb40c2ac57a1ba59aa23eaa2f2ad8735->leave($__internal_8b9091d6ff7e3c5da7459c7e26041a37eb40c2ac57a1ba59aa23eaa2f2ad8735_prof);

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
