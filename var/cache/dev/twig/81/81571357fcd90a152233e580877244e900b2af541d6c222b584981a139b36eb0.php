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
        $__internal_c3e6d908fe825d499ce99f562e0a17483b6587595c41929e2b24412de7f9ccd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3e6d908fe825d499ce99f562e0a17483b6587595c41929e2b24412de7f9ccd6->enter($__internal_c3e6d908fe825d499ce99f562e0a17483b6587595c41929e2b24412de7f9ccd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_99ba5fde9491b5159624843d0c59b07bccddcbb5720c3fdaac49ab77cca28c2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99ba5fde9491b5159624843d0c59b07bccddcbb5720c3fdaac49ab77cca28c2e->enter($__internal_99ba5fde9491b5159624843d0c59b07bccddcbb5720c3fdaac49ab77cca28c2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_c3e6d908fe825d499ce99f562e0a17483b6587595c41929e2b24412de7f9ccd6->leave($__internal_c3e6d908fe825d499ce99f562e0a17483b6587595c41929e2b24412de7f9ccd6_prof);

        
        $__internal_99ba5fde9491b5159624843d0c59b07bccddcbb5720c3fdaac49ab77cca28c2e->leave($__internal_99ba5fde9491b5159624843d0c59b07bccddcbb5720c3fdaac49ab77cca28c2e_prof);

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
