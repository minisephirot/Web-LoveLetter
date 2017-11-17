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
        $__internal_d34bb41c787385f18b3b3a90b19e70f7b20c68b773759811aed414950d8cf639 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d34bb41c787385f18b3b3a90b19e70f7b20c68b773759811aed414950d8cf639->enter($__internal_d34bb41c787385f18b3b3a90b19e70f7b20c68b773759811aed414950d8cf639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_eec5b115af038af3faf526e514a660a6add53b9efab9a3c77b80ce013434e26a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eec5b115af038af3faf526e514a660a6add53b9efab9a3c77b80ce013434e26a->enter($__internal_eec5b115af038af3faf526e514a660a6add53b9efab9a3c77b80ce013434e26a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_d34bb41c787385f18b3b3a90b19e70f7b20c68b773759811aed414950d8cf639->leave($__internal_d34bb41c787385f18b3b3a90b19e70f7b20c68b773759811aed414950d8cf639_prof);

        
        $__internal_eec5b115af038af3faf526e514a660a6add53b9efab9a3c77b80ce013434e26a->leave($__internal_eec5b115af038af3faf526e514a660a6add53b9efab9a3c77b80ce013434e26a_prof);

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
