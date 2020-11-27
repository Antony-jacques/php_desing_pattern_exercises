<?php

class QueryBuilder
{
    // Your code here
    public $select = [];
    public $from = [];
    public $where = [];

    public function select(...$args): QueryBuilder {
        $query = new QueryBuilder;
        $this->query->$select[]=$args;
        return $select;
    }
// Qui injectera dans l'attribut $select le parametre $args.

public function from($table, $alias = false): QueryBuilder {}
// Injecte dans l'attribut $from la table $table ainsi que l'alias $alias uniquement si il est présent.
// (Le bon formatage avec un alias sera "<$table> AS <$alias>")

public function where(...$args): QueryBuilder {}
// La même chose mais pour where mais qui poussera dans le tableau where le parametre $arg.

public function __toString(): QueryBuilder {}
// Qui retourne une string qui sera les différents attribut de la classe, bien formatter comme le veux sujet.
// (penser à utiliser la fonction implode pour bien séparer le contenu des tableaux, des virgules pour le $select et le $from et des "AND" pour le $where).
}