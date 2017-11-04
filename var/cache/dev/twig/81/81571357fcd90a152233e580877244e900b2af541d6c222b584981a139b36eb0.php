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
        $__internal_b47765388487971152c9c10e8a2502f1e75b49f23bb33b5bf9e1022bad32e333 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b47765388487971152c9c10e8a2502f1e75b49f23bb33b5bf9e1022bad32e333->enter($__internal_b47765388487971152c9c10e8a2502f1e75b49f23bb33b5bf9e1022bad32e333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_4d0dd2f2a79496566786a843fbbe159c752f7ad7f702d8a94cc4f0a5c45ef757 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d0dd2f2a79496566786a843fbbe159c752f7ad7f702d8a94cc4f0a5c45ef757->enter($__internal_4d0dd2f2a79496566786a843fbbe159c752f7ad7f702d8a94cc4f0a5c45ef757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_b47765388487971152c9c10e8a2502f1e75b49f23bb33b5bf9e1022bad32e333->leave($__internal_b47765388487971152c9c10e8a2502f1e75b49f23bb33b5bf9e1022bad32e333_prof);

        
        $__internal_4d0dd2f2a79496566786a843fbbe159c752f7ad7f702d8a94cc4f0a5c45ef757->leave($__internal_4d0dd2f2a79496566786a843fbbe159c752f7ad7f702d8a94cc4f0a5c45ef757_prof);

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
