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
        $__internal_87fc9c3c93de5abd2fc210e229db17bf3208132912e521d1dc3ba9dde58a553f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87fc9c3c93de5abd2fc210e229db17bf3208132912e521d1dc3ba9dde58a553f->enter($__internal_87fc9c3c93de5abd2fc210e229db17bf3208132912e521d1dc3ba9dde58a553f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_c914649ee0b35806fb9b9bfecb701809733c8cfb9fba294d153bba9c393feb06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c914649ee0b35806fb9b9bfecb701809733c8cfb9fba294d153bba9c393feb06->enter($__internal_c914649ee0b35806fb9b9bfecb701809733c8cfb9fba294d153bba9c393feb06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_87fc9c3c93de5abd2fc210e229db17bf3208132912e521d1dc3ba9dde58a553f->leave($__internal_87fc9c3c93de5abd2fc210e229db17bf3208132912e521d1dc3ba9dde58a553f_prof);

        
        $__internal_c914649ee0b35806fb9b9bfecb701809733c8cfb9fba294d153bba9c393feb06->leave($__internal_c914649ee0b35806fb9b9bfecb701809733c8cfb9fba294d153bba9c393feb06_prof);

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
