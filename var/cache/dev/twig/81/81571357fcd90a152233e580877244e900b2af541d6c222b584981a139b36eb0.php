<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_941cdb0a4e50f923bd7b2744454317b38598ba2d267835439a8d60a19aff1404 extends Twig_Template
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
        $__internal_c9b2424c61cc6b8c0617823fff90650724e2119a301b9bb904ee7df8e9f5c7b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9b2424c61cc6b8c0617823fff90650724e2119a301b9bb904ee7df8e9f5c7b8->enter($__internal_c9b2424c61cc6b8c0617823fff90650724e2119a301b9bb904ee7df8e9f5c7b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_f20c57a79c7ce0797de1ce3cc995dd7148d22e38e315562da8d158d55739f647 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f20c57a79c7ce0797de1ce3cc995dd7148d22e38e315562da8d158d55739f647->enter($__internal_f20c57a79c7ce0797de1ce3cc995dd7148d22e38e315562da8d158d55739f647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_c9b2424c61cc6b8c0617823fff90650724e2119a301b9bb904ee7df8e9f5c7b8->leave($__internal_c9b2424c61cc6b8c0617823fff90650724e2119a301b9bb904ee7df8e9f5c7b8_prof);

        
        $__internal_f20c57a79c7ce0797de1ce3cc995dd7148d22e38e315562da8d158d55739f647->leave($__internal_f20c57a79c7ce0797de1ce3cc995dd7148d22e38e315562da8d158d55739f647_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
