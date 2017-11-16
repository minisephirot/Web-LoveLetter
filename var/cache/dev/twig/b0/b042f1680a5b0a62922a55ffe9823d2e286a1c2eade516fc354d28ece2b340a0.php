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
        $__internal_17e0277f5505707c054f0debbf07a12b5ebd017a8ec327a061ae11fb8baf771f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17e0277f5505707c054f0debbf07a12b5ebd017a8ec327a061ae11fb8baf771f->enter($__internal_17e0277f5505707c054f0debbf07a12b5ebd017a8ec327a061ae11fb8baf771f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_8fcd23757e661018222adb8e908aa6fcf77b8aa8d6b7393accbfc10d2b114132 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fcd23757e661018222adb8e908aa6fcf77b8aa8d6b7393accbfc10d2b114132->enter($__internal_8fcd23757e661018222adb8e908aa6fcf77b8aa8d6b7393accbfc10d2b114132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_17e0277f5505707c054f0debbf07a12b5ebd017a8ec327a061ae11fb8baf771f->leave($__internal_17e0277f5505707c054f0debbf07a12b5ebd017a8ec327a061ae11fb8baf771f_prof);

        
        $__internal_8fcd23757e661018222adb8e908aa6fcf77b8aa8d6b7393accbfc10d2b114132->leave($__internal_8fcd23757e661018222adb8e908aa6fcf77b8aa8d6b7393accbfc10d2b114132_prof);

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
