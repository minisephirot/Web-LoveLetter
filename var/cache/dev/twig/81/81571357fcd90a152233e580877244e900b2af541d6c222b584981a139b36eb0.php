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
        $__internal_1b7fdf2241ea37575d7d668c197d1e8c5764a396c5985eec19736f5ab3d52990 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b7fdf2241ea37575d7d668c197d1e8c5764a396c5985eec19736f5ab3d52990->enter($__internal_1b7fdf2241ea37575d7d668c197d1e8c5764a396c5985eec19736f5ab3d52990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_16c589e9a722a7c31d755bee012939d62908282e3324c90e20163252b7759031 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16c589e9a722a7c31d755bee012939d62908282e3324c90e20163252b7759031->enter($__internal_16c589e9a722a7c31d755bee012939d62908282e3324c90e20163252b7759031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_1b7fdf2241ea37575d7d668c197d1e8c5764a396c5985eec19736f5ab3d52990->leave($__internal_1b7fdf2241ea37575d7d668c197d1e8c5764a396c5985eec19736f5ab3d52990_prof);

        
        $__internal_16c589e9a722a7c31d755bee012939d62908282e3324c90e20163252b7759031->leave($__internal_16c589e9a722a7c31d755bee012939d62908282e3324c90e20163252b7759031_prof);

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
