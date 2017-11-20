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
        $__internal_11dd72c886b30a2de1cdd7150a28bcd04d2e6cc612356fc2259865d247b4eb93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11dd72c886b30a2de1cdd7150a28bcd04d2e6cc612356fc2259865d247b4eb93->enter($__internal_11dd72c886b30a2de1cdd7150a28bcd04d2e6cc612356fc2259865d247b4eb93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_3050090feb1f76c3d743d90ce39d4ee8adcbcbdbf6d93d7b278fbcc2798c348e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3050090feb1f76c3d743d90ce39d4ee8adcbcbdbf6d93d7b278fbcc2798c348e->enter($__internal_3050090feb1f76c3d743d90ce39d4ee8adcbcbdbf6d93d7b278fbcc2798c348e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_11dd72c886b30a2de1cdd7150a28bcd04d2e6cc612356fc2259865d247b4eb93->leave($__internal_11dd72c886b30a2de1cdd7150a28bcd04d2e6cc612356fc2259865d247b4eb93_prof);

        
        $__internal_3050090feb1f76c3d743d90ce39d4ee8adcbcbdbf6d93d7b278fbcc2798c348e->leave($__internal_3050090feb1f76c3d743d90ce39d4ee8adcbcbdbf6d93d7b278fbcc2798c348e_prof);

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
