<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_c81f1c6b24828e5e3f130cc0a255a0d8b86a5c734d74ea9a9f0203248c8108e8 extends Twig_Template
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
        $__internal_83bc8742b6634a2919920be96ab08d5aedaf94a591d5be999f0d32b31de53d13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83bc8742b6634a2919920be96ab08d5aedaf94a591d5be999f0d32b31de53d13->enter($__internal_83bc8742b6634a2919920be96ab08d5aedaf94a591d5be999f0d32b31de53d13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_5dd8afcdea2e8ba50f72dda05835286786e81a213e21602c0d1555f3a91faf8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dd8afcdea2e8ba50f72dda05835286786e81a213e21602c0d1555f3a91faf8d->enter($__internal_5dd8afcdea2e8ba50f72dda05835286786e81a213e21602c0d1555f3a91faf8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_83bc8742b6634a2919920be96ab08d5aedaf94a591d5be999f0d32b31de53d13->leave($__internal_83bc8742b6634a2919920be96ab08d5aedaf94a591d5be999f0d32b31de53d13_prof);

        
        $__internal_5dd8afcdea2e8ba50f72dda05835286786e81a213e21602c0d1555f3a91faf8d->leave($__internal_5dd8afcdea2e8ba50f72dda05835286786e81a213e21602c0d1555f3a91faf8d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
