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
        $__internal_7857c191c7621d644ff790469bb3430701e59fdec679d4bbcd3aed52f043590f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7857c191c7621d644ff790469bb3430701e59fdec679d4bbcd3aed52f043590f->enter($__internal_7857c191c7621d644ff790469bb3430701e59fdec679d4bbcd3aed52f043590f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_364ebba926799045b553ea00b8082480efc24765fd4742f3ff977996e744d4a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_364ebba926799045b553ea00b8082480efc24765fd4742f3ff977996e744d4a4->enter($__internal_364ebba926799045b553ea00b8082480efc24765fd4742f3ff977996e744d4a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_7857c191c7621d644ff790469bb3430701e59fdec679d4bbcd3aed52f043590f->leave($__internal_7857c191c7621d644ff790469bb3430701e59fdec679d4bbcd3aed52f043590f_prof);

        
        $__internal_364ebba926799045b553ea00b8082480efc24765fd4742f3ff977996e744d4a4->leave($__internal_364ebba926799045b553ea00b8082480efc24765fd4742f3ff977996e744d4a4_prof);

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
