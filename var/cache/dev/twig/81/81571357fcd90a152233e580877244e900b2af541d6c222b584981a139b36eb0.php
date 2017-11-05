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
        $__internal_3cfe4d6e6e618c37783826c7abb591e24c935ddc598ae592566790fd4d763d46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cfe4d6e6e618c37783826c7abb591e24c935ddc598ae592566790fd4d763d46->enter($__internal_3cfe4d6e6e618c37783826c7abb591e24c935ddc598ae592566790fd4d763d46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_65a4c9785d662197f30fb6de53a9fb9532a3f0467c0123e666566eb4227b08f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65a4c9785d662197f30fb6de53a9fb9532a3f0467c0123e666566eb4227b08f8->enter($__internal_65a4c9785d662197f30fb6de53a9fb9532a3f0467c0123e666566eb4227b08f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_3cfe4d6e6e618c37783826c7abb591e24c935ddc598ae592566790fd4d763d46->leave($__internal_3cfe4d6e6e618c37783826c7abb591e24c935ddc598ae592566790fd4d763d46_prof);

        
        $__internal_65a4c9785d662197f30fb6de53a9fb9532a3f0467c0123e666566eb4227b08f8->leave($__internal_65a4c9785d662197f30fb6de53a9fb9532a3f0467c0123e666566eb4227b08f8_prof);

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
